<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\StoreRequest;
use App\Http\Requests\Categoria\UpdateRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $listaCategorias = Categoria::all();
        return view('inventario.categorias.categoria', compact('listaCategorias'));
    }


    public function create()
    {
        return view('inventario.categorias.crear_categoria');
    }


    public function store(StoreRequest $request)
    {
        Categoria::save($request->all());
        return redirect()->route('categorias');
    }


    public function show(Categoria $categoria)
    {
        return view('inventario.categorias.mostrar_categoria', compact('categoria'));
    }


    public function edit(Categoria $categoria)
    {
        return view('inventario.categorias.mostrar_categoria', compact('categoria'));
    }


    public function update(UpdateRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect()->route('categorias');
    }


    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias');
    }
}
