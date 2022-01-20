<?php

namespace App\Http\Controllers;

use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $listaProductos = Producto::all();
        return view('inventario.productos.producto', compact('listaProductos'));
    }


    public function create()
    {
        $listaCategorias = Categoria::all();
        $listaProveedores = Proveedor::all();

        return view('inventario.productos.crear_producto', compact('listaCategorias', 'listaProveedores'));
    }


    public function store(StoreRequest $request)
    {
        Producto::save($request->all());
        return redirect()->route('productos');
    }


    public function show(Producto $producto)
    {
        return view('inventario.productos.mostrar_productos', compact('producto'));
    }


    public function edit(Producto $producto)
    {
        $listaCategorias = Categoria::all();
        $listaProveedores = Proveedor::all();
        return view('inventario.productos.mostrar_productos', compact('producto'));
    }


    public function update(UpdateRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos');
    }
}
