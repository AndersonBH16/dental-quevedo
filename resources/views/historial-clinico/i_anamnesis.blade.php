<div class="card card-info card-outline mt-3">
    <div class="card-header">
        <h3 class="card-title"><b>I. ANAMNESIS</b></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
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
                        <input type="number" class="form-control" id="edad" min="2" max="90">
                    </div>
                </div>
                <div class="form-group col-sm-4 row">
                    <label class="col-sm-4 col-form-label">Sexo:</label>
                    <div class="col-md">
                        <select id="sexo" class="custom-select rounded-0">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-4 row">
                    <label class="col-sm-4 col-form-label">DNI:</label>
                    <div class="col-md">
                        <input type="text" class="form-control" value="{{ $paciente->dni }}" disabled/>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-5 row">
                    <label class="col-sm-4 col-form-label">Religión:</label>
                    <div class="col-md">
                        <input aria-invalid="religion" type="text" id="religion" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-12 row">
                    <label class="col-sm-4 col-form-label">Lugar de Nacimiento:</label>
                    <div class="col-sm-8">
                        <input type="text" id="lugarNacimiento" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-3 row">
                    <label class="col-sm-4 col-form-label">Tel:</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control" id="telefono">
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
                        <input type="text" class="form-control" id="ocupacion" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-3 row">
                    <label class="col-sm-4 col-form-label">Grado Instrucción:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="grado_instruccion">
                    </div>
                </div>
                <div class="form-group col-sm-4 row">
                    <label class="col-sm-4 col-form-label">Estado Civil:</label>
                    <div class="col-md">
                        <input type="text" class="form-control" id="estado_civil"/>
                    </div>
                </div>
                <div class="form-group col-sm-5 row">
                    <label class="col-sm-4 col-form-label">Nacionalidad:</label>
                    <div class="col-md">
                        <input type="text" class="form-control" id="nacionalidad"/>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-5 row">
                    <label class="col-sm-4 col-form-label">En caso de emergencia, llamar al:</label>
                    <div class="col-md">
                        <input type="text" id="telefono_emergencia" class="form-control">
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
                <textarea id="tiempo_enfermedad" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
                <label>Signos y síntomas principales:</label><br>
                <textarea id="signos_sintomas_princip" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
                <label>Relato de la enfermedad:</label><br>
                <textarea id="relato_enfermedad" class="form-control" placeholder="Escribir detalle" rows="5"></textarea><br>
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                <label class="mt-2">c. Estomatológicos</label>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Controla su salud bucal con visitas periódicas al dentista?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Le sangran las encías?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Alguna vez le han colocado anestesia dental?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                    <div class="col-sm-6" style="display: none;">
                        <input id="txt_anestesiaDental" type="text" placeholder="Cuál?" class="form-control col-lg-4">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Ha tenido alguna complicación después de una extracción dental?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                    <div class="col-sm-6" style="display: none;">
                        <input id="txt_complicacion_dental" type="text" placeholder="Cuál?" class="form-control col-lg-4">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Le gusta masticar chicle?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Rechina o aprieta los dientes?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Se muerde labios, lengua o carrillos?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Le gusta morder objetos?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Tiene dificultad para abrir la boca?
                        </label>
                    </div>
                    <div class="col-md-4 row">
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Sí</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
