<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pacientes.pacientes');
    }

    public function odontogram(Request $request, Paciente $paciente)
    {
        return view('pacientes.odontograma', compact('paciente') + $request->only('type'));
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
        if($request->ajax()) {
            $query = DB::table('pacientes', 'pa')
                ->selectRaw('
                    pa.dni,
                    pa.apellidoPaterno,
                    pa.apellidoMaterno,
                    pa.nombreCompleto,
                    pa.fechaNacimiento,
                    pa.telefono,
                    pa.email
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            DB::table('pacientes')->insert([
                'dni' => $request->dni,
                'apellidoPaterno' => $request->apellidoPaternoPaciente,
                'apellidoMaterno' => $request->apellidoMaternoPaciente,
                'nombreCompleto' => $request->nombresPaciente,
                'fechaNacimiento' => $request->fechaNacimientoPaciente,
                'email' => $request->emailPaciente,
                'telefono' => $request->telefonoPaciente,
                'direccion' => $request->direccionPaciente,
            ]);

            $postResponse = "Paciente registrado exitosamente";

//            return response()->json([
//                'responseMessage' => $postResponse
//            ]);

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
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
