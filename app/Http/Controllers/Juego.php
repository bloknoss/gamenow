<?php

namespace App\Http\Controllers;

use App\Models\Juegos;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class Juego extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = Juegos::all();

        return view('juegos.index', compact('juegos'));
    }


    public function create(Request $request)
    {
        return view('juegos.create');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request)
    {
        $formData = $request->validate([
            'nombre_juego' => ['required', Rule::unique('juegos', 'nombre_juego')],
            'editorial_id' => ['required'],
            'fecha_lanzamiento' => ['required'],
            'ventas' => ['required'],
            'descripcion' => ['required']
        ]);

        Juegos::create($formData);
        return redirect('juegos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $juego = Juegos::find($id);
        $compras = \App\Models\Compras::where('juego_id', $id)->get();
        $imagenes = \App\Models\Imagenes::where('juego_id', $id)->get();
        $editorial = \App\Models\Editoriales::where('id', $juego->editorial_id)->get()[0]->nombre_editorial;
        $usuarios_asociados = [];

        foreach ($compras as $compra) {
            $usuarios_asociados[] = \App\Models\User::where('id', $compra->usuario_id)->get()[0];
        }

        return view('juegos.show', ['juego' => $juego, "imagenes" => $imagenes, "editorial" => $editorial, "usuarios" => $usuarios_asociados]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $juego = Juegos::find($id);
        return view('juegos.edit', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $juegos = Juegos::find($id);

        $juegos->update($request->all());

        return redirect('juegos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $juego = Juegos::find($id);
        $juego->delete();

        return back();

    }
}
