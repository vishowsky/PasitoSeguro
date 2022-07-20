<?php

namespace App\Http\Controllers;

use App\Models\talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tallas']=talla::paginate(5);
        return view('tallas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tallas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTalla=request()->except('_token');

        
        talla::insert($datosTalla);
        return redirect('tallas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function show(talla $talla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function edit($talla_id)
    {
        $talla = talla::findOrFail($talla_id);
        return view('tallas.edit',compact('talla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function update($talla_id)
    {
        $datosTalla=request()->except(['_token','_method']);
        talla::where('talla_id','=',$talla_id)->update($datosTalla);
        $talla = talla::findOrFail($talla_id);
        return view('tallas.edit',compact('talla'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function destroy($talla_id)
    {
        talla::destroy($talla_id);
        return redirect('tallas');
    }
}
