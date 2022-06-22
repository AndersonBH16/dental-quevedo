<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;
use Acaronlex\LaravelCalendar\Facades\Calendar;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Citas::all();
        $event = [];

        foreach($citas as $row){
            ($row->estado == 0) ? $color = 'red' : $color = '#196A9B';
            $event[] = Calendar::event(
                $row->titulo,
                false,
                $row->fecha." ".$row->start,
                $row->fecha." ".$row->end,
                $row->id,
                [
                    'color' => $color
                ]
            );
        }

        $calendar = Calendar::addEvents($event);
        $calendar = Calendar::setOptions([
            'locale' => 'es',
            'displayEventTime' => true,
            'timeZone' => 'America/Lima',
            'selectMirror' => true,
            'editable' => true,
            'selectable' => true,
        ]);

        $calendar->setCallbacks([
            'select'        => 'function(selectionInfo){

                                }',
            'eventClick'    => 'function(info){
                                    accionCita(info, "actualizarCita");
                                }',
            'dateClick'     => 'function(info) {
                                    accionCita(info, "crearCita");
                               }'
        ]);

        return view('citas.citas', compact('citas', 'calendar'));
    }

    public function validarFecha($fecha, $horaInicial, $horaFinal){
        $cita = Citas::select()
                ->whereDate('fecha', $fecha)
                ->whereTime('start', '>=', $horaInicial)
                ->whereTime('end', '<=', $horaFinal)
                ->first();

        return $cita == null ? true : false;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if($request->ajax()) {
//            request()->validate(Citas::$rules);
            if($this->validarFecha($request->fecha, $request->time_start, $request->time_end)){
                try{
                    $citas = Citas::query()->create([
                        'titulo' => $request->titulo,
                        'descripcion' => $request->descripcion,
                        'fecha' => $request->fecha,
                        'start' => $request->time_start,
                        'end' => $request->time_end,
                        'paciente' => $request->paciente
                    ]);
                    return response()->json('cita guardada con éxito');
                }catch (\Exception $e){
                    return response()->json([
                        "error" => $e
                    ]);
                }
            }else{
                return response()->json('la fecha ya existe');
            }

        } else {
            return response()->json([
                "error" => "Your ajax request was invalid."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $citas = DB::table("citas")->find($id);
        return response()->json($citas);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        if($request->ajax() && $request->method() === 'PATCH') {
            DB::table('citas')
                ->where('id', $id)
                ->update([
                    'titulo'        => $request->titulo,
                    'descripcion'   => $request->descripcion,
                    'fecha'         => $request->fecha,
                    'start'         => $request->time_start,
                    'end'           => $request->time_end,
                    'paciente'      => $request->paciente
                ]);
        }else {
            return response()->json([
                "error" => "Your ajax request was invalid."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('citas')
            ->where('id', $id)
            ->update([
                'estado' => 0
            ]);
    }
}
