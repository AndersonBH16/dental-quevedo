@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">HISTORIA CLÍNICA ODONTOLÓGICA -
        </h4>
    </div>
@stop

@section('content')
    <form class="form-horizontal" action="{{ url('/pacientes') }}" method="POST">
        <div class="card card-info card-outline mt-3">
            @csrf
            <div class="card-body">
                <label><b>I. ANAMNESIS</b></label><br>
                <div class="container-fluid justify-content-center">
                    <label class="">1. Filación</label>
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <label class="col-form-label">Nombre:</label>
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" value="{{$paciente->nombreCompleto}} {{ $paciente->apellidoPaterno }} {{ $paciente->apellidoMaterno }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-4 row">
                            <div class="col-sm-2">
                                <label class="col-form-label">Edad:</label>
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" id="edad">
                            </div>
                        </div>
                        <div class="form-group col-sm-4 row">
                            <label class="col-sm-4 col-form-label">Sexo:</label>
                            <div class="col-md">
                                <select class="custom-select rounded-0">
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-4 row">
                            <label class="col-sm-4 col-form-label">DNI:</label>
                            <div class="col-md">
                                <input type="text" class="form-control" id="" value="{{ $paciente->dni }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-5 row">
                            <label class="col-sm-4 col-form-label">Religión:</label>
                            <div class="col-md">
                                <input type="text" id="religion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-12 row">
                            <label class="col-sm-4 col-form-label">Lugar y Fecha de Nacimiento:</label>
                            <div class="col-sm-8">
                                <input type="text" id="religion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-3 row">
                            <label class="col-sm-4 col-form-label">Tel:</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="telefono" value="20">
                            </div>
                        </div>
                        <div class="form-group col-sm-4 row">
                            <label class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-md">
                                <input type="text" class="form-control" id="email"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 row">
                            <label class="col-sm-4 col-form-label">Ocupación:</label>
                            <div class="col-md">
                                <input type="text" class="form-control" id="" value="{{ $paciente->dni }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-3 row">
                            <label class="col-sm-4 col-form-label">Grado Instrucción:</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="telefono" value="20">
                            </div>
                        </div>
                        <div class="form-group col-sm-4 row">
                            <label class="col-sm-4 col-form-label">Estado Civil:</label>
                            <div class="col-md">
                                <input type="text" class="form-control" id="email"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 row">
                            <label class="col-sm-4 col-form-label">Nacionalidad:</label>
                            <div class="col-md">
                                <input type="text" class="form-control" id="" value="{{ $paciente->dni }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-5 row">
                            <label class="col-sm-4 col-form-label">En caso de emergencia, llamar al:</label>
                            <div class="col-md">
                                <input type="text" id="religion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <label class="">2. Motivo de Consulta</label>
                    <div class="form-group row">
                        <textarea id="motivo_consulta" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                    </div>
                    <label class="">3. Enfermedad Actual</label>
                    <div class="form-group row"><br>
                        <label>Tiempo de enfernmedad:</label><br>
                        <textarea id="diagnostico_pre" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
                        <label>Signos y síntomas principales:</label><br>
                        <textarea id="diagnostico_pre" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
                        <label>Relato de la enfermedad:</label><br>
                        <textarea id="diagnostico_pre" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
                    </div>
                    <label class="">4. Antecedentes</label>
                    <div class="form-group"><br>
                        <label class="">a. Personales</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Hipertensión
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Hepatitis
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Diabetes
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Anemia
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Trastornos respiratorios
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Epilepsia
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tuberculosis
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Fiebre reumática
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Enfermedad cardíaca
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Trastornos gástricos
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Enfermedad renal
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Trastornos hormonales
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Neuralgia
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Alergia a algún medicamento
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Infección venérea o SIDA
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Colesterol
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Artitris
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Algún tumor
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Enfermedad de la piel
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Embarazo
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Discrasias sanguíneas
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Trastornos psicológicos
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Fuma
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Alcoholismo
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Drogadicción
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Cáncer
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Otra enfermedad
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Toma algún medicamento
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="for

                                        m-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Quirúrgicos
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Quimioterapia o Radioterapia
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ampliación</label><br>
                                    <input id="ampliacion" type="text" class="form-control" placeholder="Ampliación">
                                </div>
                            </div>
                        </div>
                        <label class="">b. Familiares</label>
                        <div class="">
                            <textarea id="familiares" class="form-control" placeholder="Descripción" rows="5"></textarea>
                        </div>
                        <label class="">c. Estomatológicos</label>
                        <div class="row">
                            <div class="col-md-8">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ¿Controla su salud bucal con visitas periódicas al dentista?
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Embarazo
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>III. DIAGNÓSTICO PRESUNTIVO</b></label><br>
                <textarea id="diagnostico_pre" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>IV. PRUEBAS COMPLEMENTARIAS</b></label><br>
                <div class="ml-1">
                    <label>Radiografía periapical:</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Radiografía bite-wing:</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Radiografía oclusal:</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Radiografía panorámica:</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Radiografía cefalométrica:</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>TAC (Tomografía Axial Computarizada):</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Hemograma</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                    <label>Biopsia</label><br>
                    <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="2"></textarea><br>
                </div>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>V. DIAGNÓSTICO DEFINITIVO</b></label><br>
                <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>VI. PRONÓSTICO</b></label><br>
                <textarea id="pronostico" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>VII. PRESUPUESTO</b></label><br>
                <textarea id="presupuesto" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>VIII. PLAN DE TRATAMIENTO Y RECOMENDACIONES</b></label><br>
                <textarea id="plan_tratamiento_recomendaciones" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>IX. TRATAMIENTOS REALIZADOS</b></label><br>
                <textarea id="tratamiento" placeholder="Faltaaaaaaaaaa....."></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-body">
                <label><b>X. CONTROL Y EVOLUCIÓN</b></label><br>
                <textarea id="pronostico" class="form-control" placeholder="Detallar" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
        <div class="card-body">
            <label><b>XI. CONSENTIMIENTO INFORMADO</b></label><br>
            <p class="text-justify">
                Yo <b>{{ $paciente->nombreCompleto }} {{ $paciente->apellidoPaterno }} {{ $paciente->apellidoMaterno }}</b><br>
                identificado con DNI N° <b>{{ $paciente->dni }}</b><br>
                Autorizo a Consultorio Odontológico Quevedo para que realice los
                procedimientos consignados en el plan de tratamiento de mi historia clínica y sus
                posibles modificaciones, adicionalmente a que actúe según su criterio médico
                y ético en situaciones de emergencia o enfermedad no esperadas. Fui informado
                claramente acerca de los diferentes tipos de procedimientos a realizar, de los
                resultados esperados, de los riesgos y efectos secundarios tales como: sangrado,
                dolor, inflamación, limitación en la apertura de la boca, enrojecimiento,
                sensación de hormigueo, posibles pérdidas de sensibilidad, posibles reacciones
                adversas a los medicamentos (alergias), lesiones a dientes adyacentes,
                afectación de otras estructuras anatómicas, y otros que se puedan producir
                resultado de la atención odontológica.
                Declaro haber leído el contenido del presente documento y en constancia de
                aceptación lo firmo.
            </p>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <span>______________________________</span><br>
                        <label>CD.</label><br>
                        <label>COP:</label><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <span>______________________________</span><br>
                        <label>Paciente.</label><br>
                        <label>DNI:</label><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    @include('pacientes.modal.nuevo_paciente')
    @include('pacientes.modal.odontograma')
@stop
@section('js')
    <script src="{{ asset('dq-scripts/pacientes.js') }}"></script>
@stop

