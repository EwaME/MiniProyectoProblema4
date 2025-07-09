<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
    {
    $ListaAutores = Autor::all();
    return view('autores.index')->with('ListaAutores', $ListaAutores);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->correo = $request->correo;
        $autor->adscripcion = $request->adscripcion;
        $autor->save();
        return redirect('/autores');
    }

    /**
     * Display the specified resource.
     */
public function show(string $id)
{
 
}


public function edit(string $id)
{

}
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $autor = Autor::where('id_autor', $id)->first();
        $autor->nombre = $request->nombre;
        $autor->correo = $request->correo;
        $autor->adscripcion = $request->adscripcion;
        $autor->save();

        return redirect('/autores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Autor::where('id_autor', $id)->delete();
        return redirect('/autores');
    }
}
