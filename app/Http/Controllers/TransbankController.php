<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Webpay;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use App\Models\carro;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers;
use App\Models\Venta;
use App\Models\DetalleVenta;

class TransbankController extends Controller
{
    public function __construct()
    {
        if (app()->environment('production')){
            WebPayPlus::configureForProduction(
                env('webpay_plus_cc'),
                env('webplay_plus_api_key')
            );
        }else{
        WebPayPlus::configureForTesting();
    }
    }

    public function iniciar_compra(Request $request){

        $total = Carro::where('usu_id',"1")->sum('precio');
        $nueva_compra = new Webpay();
        $nueva_compra-> session_id = "123456";
        $nueva_compra-> total = $total;
        $nueva_compra->save();
        $url_to_pay = self::start_web_pay_plus_transaction( $nueva_compra);
        return redirect($url_to_pay);

    }

    public function start_web_pay_plus_transaction( $nueva_compra){
        $transaccion= (new Transaction)->create(
            $nueva_compra->id,
            $nueva_compra->session_id,
            $nueva_compra->total,
            route('confirmar_pago')
        );
        $url = $transaccion-> getUrl().'?token_ws='.$transaccion->getToken();
        return $url;

    }

    public function confirmar_pago(Request $request){
        $confirmacion = (new Transaction)->commit( $request->get('token_ws'));
        $compra = Webpay::where('id', $confirmacion->buyOrder)->first();

        if ( $confirmacion->isApproved()){
            $compra-> status= 2; //pasa la compra a estar aprobada
            $compra->update();

        
            $venta_fecha = now();
            $venta_total = $compra->total;
            $usu_id=session()->get('user')['usu_id'];
       
           //$data=array('venta_fecha'=>now(),'venta_total'=>"200",'usu_id'=>$usu_id);
           
           
           DB::table('ventas')->insert([
            'venta_fecha' => $venta_fecha,
            'venta_total' => $venta_total,
            'usu_id' => $usu_id ]);
        $contar =  Carro::where('usu_id',$usu_id)->sum('producto_id');
        $VentaId = Venta::latest('venta_id')->first()->venta_id;
        $productoId = Carro::where('usu_id',$usu_id)->select('producto_id','precio')->get();
       
       

        
        for($i=0;$i<$contar;$i++){
       
        DB::table('detalle_ventas')->insert([
            'venta_id' => $VentaId,
            'producto_id' => $productoId[$i]->producto_id,
            'dv_cantidad' => 1,
            'dv_subtotal' => $productoId[$i]->precio]);
        }

        //for($i=0;$i<count($contar);$i++){

          //  DB::table('detalle_ventas')->insert([
            //    $datos
            //]);
        //}
       
    
        

       
      

       
        
       


            return redirect( env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}");
        }else{
            //cuando la compra es rechazada
            return redirect( env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}");
        
        }

    }
}
