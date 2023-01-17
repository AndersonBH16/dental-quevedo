<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoriaClinicaController extends Controller
{
    public function index(Request $request, Paciente $paciente, HistorialClinico $historial)
    {
        return view('historial-clinico.historial', compact('paciente'), compact('historial'));
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

    public function store(Request $request){
//        try {
//            dd($request["dataPaciente"]["idPaciente"]);
////            dd($request["dataPaciente"]);
//
//        }catch (\Exception $e){
//            dd($e);
//        }

        try{
            DB::table('historial_clinico')->updateOrInsert([
                'idPaciente'=>'12345678'
            ], [
                'ana_edad'                      => $request["dataPaciente"]["edad"],
                'ana_sexo'                      => $request["dataPaciente"]["sexo"],
                'ana_religion'                  => $request["dataPaciente"]["religion"],
                'ana_lugar_nacimiento'          => $request["dataPaciente"]["lugarNacimiento"],
                'ana_telefono'                  => $request["dataPaciente"]["telefono"],
                'ana_email'                     => $request["dataPaciente"]["email"],
                'ana_ocupacion'                 => $request["dataPaciente"]["ocupacion"],
                'ana_grado_instruccion'         => $request["dataPaciente"]["grado_instruccion"],
                'ana_estado_civil'              => $request["dataPaciente"]["estado_civil"],
                'ana_nacionalidad'              => $request["dataPaciente"]["nacionalidad"],
                'ana_telefono_emergencia'       => $request["dataPaciente"]["telefono_emergencia"],
                'ana_motivo_consulta'           => $request["dataPaciente"]["motivo_consulta"],
                'ana_tiempo_enfermedad'         => $request["dataPaciente"]["tiempo_enfermedad"],
                'ana_signos_sintomas'           => $request["dataPaciente"]["signos_sintomas_princip"],
                'ana_relato_enfermedad'         => $request["dataPaciente"]["relato_enfermedad"],
//                'checkbox_antecedentes'         => implode(',', $request["dataPaciente"]["checkbox_antecedentes"]),
//                'ana_antecedentes_hh'           => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_da'           => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_te'           => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_tfr'          => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_ec_tg'        => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_er_th'        => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_n_aam'        => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_sida_c'       => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_a_at'         => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_ep_e'         => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_ds_tp'        => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_f_a'          => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_d_c'          => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_o_tam'        => $request["dataPaciente"]["categoria"],
//                'ana_antecedentes_q_qr'         => $request["dataPaciente"]["categoria"],
                'ana_antecedentes_ampliacion'   => $request["dataPaciente"]["amp"],
                'ana_antecedentes_familiares'   => $request["dataPaciente"]["familiares"],
                'idPaciente'                    => $request["dataPaciente"]["idPaciente"],
                'diagnostico_presuntivo'        => $request["dataPaciente"]["diag_pres"],
                'pc_rad_peri'                   => $request["dataPaciente"]["periapical"],
                'pc_rad_b_w'                    => $request["dataPaciente"]["bite_wing"],
                'pc_rad_oclusal'                => $request["dataPaciente"]["oclusal"],
                'pc_rad_pano'                   => $request["dataPaciente"]["panom"],
                'pc_rad_cefa'                   => $request["dataPaciente"]["cefalo"],
                'pc_rad_tac'                    => $request["dataPaciente"]["tac"],
                'pc_rad_hemograma'              => $request["dataPaciente"]["hemo"],
                'pc_rad_biopsia'                => $request["dataPaciente"]["biopsia"],
                'diagnostico_definitivo'        => $request["dataPaciente"]["diagnostico_def"],
                'pronostico'                    => $request["dataPaciente"]["pronostico"],
                'presupuesto'                   => $request["dataPaciente"]["presupuesto"],
                'plan_trat_recomend'            => $request["dataPaciente"]["plan_trat_recomend"],
                'control_evol'                  => $request["dataPaciente"]["control_evol"]
            ]);

        }catch (\Exception $e){
            return response()->json([
                "error" => $e
            ]);
        }
    }

    public function show($dni){
        try{
            return response()->json(
                DB::select('CALL obtenerHistorialClinicoXDNI(?)',[$dni])[0]
            );

        }catch (\Exception $e){
            $error = $e->getMessage() . 'Linea error: '.$e->getLine();
            echo $error;
            exit();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
