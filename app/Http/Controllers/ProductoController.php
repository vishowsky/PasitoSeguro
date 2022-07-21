<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\talla;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\carro;
use Facade\Ignition\QueryRecorder\Query;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']= DB::table('productos')
        ->join('categorias','categorias.cat_id','=','productos.cat_id')
        ->join('tallas','tallas.talla_id','=','productos.cat_id')
        ->select('productos.producto_id','productos.producto_nom','productos.producto_stock','productos.producto_prec','productos.producto_desc','productos.producto_img'
        ,'categorias.cat_nom','tallas.talla_nom')
        ->orderBy('productos.producto_id')
        ->paginate(5);
        return view('productos.index',$datos);
    }


    public function catalogo()
    {
        $datos['productos']= DB::table('productos')
        ->join('categorias','categorias.cat_id','=','productos.cat_id')
        ->join('tallas','tallas.talla_id','=','productos.cat_id')
        ->select('productos.producto_id','productos.producto_nom','productos.producto_stock','productos.producto_prec','productos.producto_desc','productos.producto_img'
        ,'categorias.cat_nom','tallas.talla_nom')
        ->orderBy('productos.producto_id')
        ->paginate(5);
        return view('productos.catalogo',$datos);
    }



    public function home()
    {
        $datos['productos']= DB::table('productos')
        ->join('categorias','categorias.cat_id','=','productos.cat_id')
        ->join('tallas','tallas.talla_id','=','productos.cat_id')
        ->select('productos.producto_id','productos.producto_nom','productos.producto_stock','productos.producto_prec','productos.producto_desc','productos.producto_img'
        ,'categorias.cat_nom','tallas.talla_nom')
        ->orderBy('productos.producto_id')
        ->paginate(5);
        return view('/welcome',$datos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categoria::all();
        $tallas = talla::all();
   
        
        return view('productos.create', compact('categorias','tallas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProducto=request()->except('_token');

        if($request->hasFile('producto_img')){
            $datosProducto['producto_img']=$request->file('producto_img')->store('producto-Img','public');
        }
        producto::insert($datosProducto);
        return redirect('productos');
    }

    public function verProducto($id){
        $datos['productos']= DB::table('productos')
        ->join('categorias','categorias.cat_id','=','productos.cat_id')
        ->join('tallas','tallas.talla_id','=','productos.talla_id')
        ->select('productos.producto_id','productos.producto_nom','productos.producto_stock','productos.producto_prec','productos.producto_desc','productos.producto_img'
        ,'categorias.cat_nom','tallas.talla_nom')
        ->where('productos.producto_id','=',$id)
        ->orderBy('productos.producto_nom')
        ->paginate(5);

       

        return view('productos.verProducto',$datos);
    }

    function agregarAlCarro(Request $req){

        if($req->session()->has('user'))
        {
            $carro= new Carro;
            $carro->usu_id=$req->session()->get('user')['usu_id'];
            $carro->producto_id=$req->producto_id;
          
            $carro->precio=$req->producto_prec;
            $carro->save();
            return redirect('/');
    
        }else{
            return redirect('/login');
        }
    }

    static function productosCarro(){
        $userId=Session::get('user')['usu_id'];
        return Carro::where('usu_id',$userId)->count();
    }

    function listarCarro(){
        
        $userId=Session::get('user')['usu_id'];
        $productos= DB::table('carrito')
        ->join('productos','carrito.producto_id','=','productos.producto_id')
        ->where('carrito.usu_id',$userId)
        ->select('productos.producto_id','productos.producto_nom','productos.producto_prec','productos.producto_img','productos.producto_desc','carrito.carrito_id as carroId')
        
        ->get();

        return view('/carro/index',['productos'=>$productos]);

    }
    function quitarProducto($carro_id){
        Carro::destroy($carro_id);
        return redirect('listar_Carro');
    }
    function Comprar(){
        $userId=Session::get('user')['usu_id'];
        $total = Carro::where('usu_id',$userId)->sum('precio');
        $datosCarro= DB::table('carrito')
        ->where('carrito.usu_id',$userId)
        ->select('producto_id','precio')
        
        ->get();
        return view('/carro/comprar',['total'=>$total]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto_id){
        //  public function destroy($cat_id)
        producto::destroy($producto_id);
        return redirect('productos');
    
    }
}
