<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use App\Models\Revista;
use App\Models\Relacion;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        $revistas = Revista::all();
        return view('articulo.index')
        ->with('listaArticulos', $articulos)
        ->with('listaRevistas', $revistas);
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
        $nuevoArticulo = new Articulo();
        $nuevoArticulo->titulo = $request->get('titulo');
        $nuevoArticulo->pagina_inicio = $request->get('pagina_inicio');
        $nuevoArticulo->pagina_fin = $request->get('pagina_fin');
        $nuevoArticulo->id_revista = $request->get('id_revista');
        $nuevoArticulo->save();

        return redirect("/articulos");

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
        $articulo = Articulo::where('titulo', $request->get('titulo'))->first();
        $articulo->pagina_inicio = $request->get('pagina_inicio');
        $articulo->pagina_fin = $request->get('pagina_fin');
        $articulo->id_revista = $request->get('id_revista');
        $articulo->save();
        return redirect("/articulos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
        $titulo = $request->input('titulo');
        $articulo = Articulo::where('titulo', $titulo)->first();
        $articulo->delete();
        return redirect("/articulos");
    }

    public function verAutores($titulo)
    {
        $titulo = urldecode($titulo); // ← esto es lo importante

        $articulo = Articulo::where('titulo', $titulo)->firstOrFail();

        $autores = DB::table('relacions')
            ->join('autors', 'relacions.id_autor', '=', 'autors.id_autor')
            ->where('relacions.titulo_articulo', $titulo)
            ->orderBy('relacions.orden')
            ->select('autors.*', 'relacions.orden')
            ->get();

        return view('articulo.autores', compact('articulo', 'autores'));
    }
}
