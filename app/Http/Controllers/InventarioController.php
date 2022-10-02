<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\StoreRequest;
use App\Http\Requests\StoreInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InventarioController extends Controller
{
    public function index()
    {
        $categorias = DB::select('CALL mostrarCategorias');
        return view('inventario.productos.productos', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try{
            DB::table('productos')->insert([
                'nombreProducto'  => $request->nombreProducto,
                'stock'           => $request->stock,
                'precio'          => $request->precio,
                'marca'           => $request->marca,
                'modelo'          => $request->modelo,
                'serie'           => $request->serie,
                'descripcion'     => $request->descripcion,
                'estado'          => 'ACTIVO',
                'imagen'          => 'sin imagen',
                'id_categoria'    => $request->categoria
            ]);

            return Redirect::refresh();
        }catch (\Exception $e){
            return response()->json([
                "error" => $e
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventarioRequest  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventarioRequest $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //
    }
}
