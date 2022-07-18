<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites=Site::simplePaginate(2);
        return view('sites.index',compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali=request()->validate([
            'municipio'=>'required',
            'lugar'=>'required', 
            'direccion'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'foto'=>'required',
            'descripcion'=>'required',
            'tipo_actividad'=>'required',
            'horario_atencion'=>'required',
            'estado'=>'required'
        ]);

            if(isset($vali)){
                $sitio=new Site();
                $sitio->municipio= $request->municipio;
                $sitio->lugar= $request->lugar;
                $sitio->direccion=$request->direccion;
                $sitio->telefono=$request->telefono;
                $sitio->correo=$request->correo;
                $sitio->foto=$request->foto;
                $sitio->descripcion=$request->descripcion;
                $sitio->tipo_actividad=$request->tipo_actividad;
                $sitio->horario_atencion=$request->horario_atencion;
                $sitio->estado=$request->estado;
                $sitio->save();
                session()->flash('message', 'Sito Succesfull!!');
                return redirect()->route('site.create');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
