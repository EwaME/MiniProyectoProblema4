<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relacion;
use App\Models\Articulo;
use App\Models\Autor;

class RelacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $relaciones = Relacion::all();
        $articulos = Articulo::all();
        $autores = Autor::all();
        return view('relaciones.index')
        ->with('listaRelaciones', $relaciones)
        ->with('listaArticulos', $articulos)
        ->with('listaAutores', $autores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaRelacion = new Relacion();
        $nuevaRelacion->titulo_articulo = $request->get('titulo_articulo');
        $nuevaRelacion->id_autor = $request->get('id_autor');
        $nuevaRelacion->orden = $request->get('orden');
        $nuevaRelacion->save();

        return redirect("/relaciones");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $relacion = Relacion::where('titulo_articulo', $request->get('titulo_articulo'))
        ->where('id_autor', $request->get('id_autor'))
        ->update(['orden' => $request->get('orden')]);

        return redirect("/relaciones")->with(['success', 'Relación actualizada correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
        $relacion = Relacion::where('titulo_articulo', $request->get('titulo_articulo'))
        ->where('id_autor', $request->get('id_autor'))
        ->delete();
        return redirect("/relaciones");
    }
}
