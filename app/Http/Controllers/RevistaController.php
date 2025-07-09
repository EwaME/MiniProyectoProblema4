<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revista;
use App\Models\Articulo;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosRevistas = Revista::all();
        return view('revistas.index')->with('listaRevistas', $datosRevistas);

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
        $datosRevista = new Revista();
        $datosRevista->Titulo = $request->get('titulo');
        $datosRevista->Issn = $request->get('issn');
        $datosRevista->Numero = $request->get('numero');
        $datosRevista->anio_publicacion = $request->get('anio');
        $datosRevista->save();
        return redirect('/revistas');

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
    public function update(Request $request, string $id)
    {
        $datosRevista = Revista::find($id);
        $datosRevista->Titulo = $request->get('titulo');
        $datosRevista->Issn = $request->get('issn');
        $datosRevista->Numero = $request->get('numero');
        $datosRevista->anio_publicacion = $request->get('anio');
        $datosRevista->save();
        return redirect('/revistas');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datosRevista = Revista::find($id);
        $datosRevista->delete();
        return redirect('/revistas');
    }

    public function verArticulos($id)
{
    $revista = Revista::find($id);

    if (!$revista) {
        return redirect('/revistas')->with('error', 'Revista no encontrada');
    }

    $articulos = Articulo::where('id_revista', $id)
            ->orderBy('pagina_inicio', 'asc')
            ->get();

    return view('revistas.articulos', compact('revista', 'articulos'));
}

}
