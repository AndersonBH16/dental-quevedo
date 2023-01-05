<?php

namespace App\Http\Controllers;

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

    public function mostrarTodos(Request $request){
        try{
            if($request->ajax()) {
                $query = DB::table('productos', 'prod')
                    ->selectRaw('
                    prod.idProducto,
                    prod.nombreProducto,
                    prod.stock,
                    prod.precio,
                    prod.marca,
                    prod.modelo,
                    prod.serie,
                    prod.descripcion,
                    prod.estado,
                    prod.imagen,
                    cat.nombre_categoria
                ')->Join('categorias as cat', 'cat.id', '=', 'prod.id_categoria');

                if($request->server_order){
                    $column = $request->server_order[0]['column'];
                    $dir = $request->server_order[0]['dir'];
                }else{
                    $column = null;
                }

                $table = datatables((isset($columns[$column]) ? $query->orderBy($columns[$column], $dir) : $query)->get())->toJson();
                return $table;
            }else {
                return response()->json([
                    "error" => "Your ajax request was invalid."
                ]);
            }
        }catch (\Exception $e){
            $error = $e->getMessage() . 'Linea error: '.$e->getLine();
            echo $error;
            exit();
        }
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
