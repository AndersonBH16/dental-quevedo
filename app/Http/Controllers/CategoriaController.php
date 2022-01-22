<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\StoreRequest;
use App\Http\Requests\Categoria\UpdateRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function mostrarTodos(Request $request){
        if($request->ajax()) {
            $query = DB::table('categorias', 'cat')
                ->selectRaw('
                    cat.nombre_categoria,
                    cat.descripcion
                ');

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
