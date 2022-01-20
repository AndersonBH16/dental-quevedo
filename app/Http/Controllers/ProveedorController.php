<?php

namespace App\Http\Controllers;

use App\Http\Requests\Proveedor\StoreRequest;
use App\Http\Requests\Proveedor\UpdateRequest;
use App\Models\Proveedor;


class ProveedorController extends Controller
{
    public function index()
    {
        $listaProveedores = Proveedor::all();
        return view('inventario.categorias.categoria', compact('listaProveedores'));
    }


    public function create()
    {
        return view('inventario.categorias.crear_categoria');
    }


    public function store(StoreRequest $request)
    {
        Proveedor::save($request->all());
        return redirect()->route('categorias');
    }


    public function show(Proveedor $proveedor)
    {
        return view('inventario.categorias.mostrar_categoria', compact('proveedor'));
    }


    public function edit(Proveedor $proveedor)
    {
        return view('inventario.categorias.mostrar_categoria', compact('proveedor'));
    }


    public function update(UpdateRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('categorias');
    }


    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('categorias');
    }
}
