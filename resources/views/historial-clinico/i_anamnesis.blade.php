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
                    <input id="nombres" type="text" class="form-control" value="{{$paciente->nombreCompleto}} {{ $paciente->apellidoPaterno }} {{ $paciente->apellidoMaterno }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-4 row">
                    <div class="col-sm-2">
                        <label class="col-form-label">Edad:</label>
                    </div>
                    <div class="col-sm">
                        <input id="edad" type="number" class="form-control" min="2" max="90">
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
                        <input id="dni" type="text" class="form-control" value="{{ $paciente->dni }}" disabled/>
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
                <label>Tiempo de enfermedad:</label><br>
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
                                <input id="hiper" name="antecedentes" class="form-check-input" type="checkbox" value="hipertension">
                                <label class="form-check-label" for="hiper">
                                    Hipertensión
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="hepa" name="antecedentes" class="form-check-input" type="checkbox" value="hepatitis">
                                <label class="form-check-label" for="hepa">
                                    Hepatitis
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="diab" name="antecedentes" class="form-check-input" type="checkbox" value="diabetes">
                                <label class="form-check-label" for="diab">
                                    Diabetes
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="anem" name="antecedentes" class="form-check-input" type="checkbox" value="anemia">
                                <label class="form-check-label" for="anem">
                                    Anemia
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="tt" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Respiratorios">
                                <label class="form-check-label" for="tt">
                                    Trastornos Respiratorios
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="epil" name="antecedentes" class="form-check-input" type="checkbox" value="Epilepsia">
                                <label class="form-check-label" for="epil">
                                    Epilepsia
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="tbc" name="antecedentes" class="form-check-input" type="checkbox" value="Tuberculosis">
                                <label class="form-check-label" for="tbc">
                                    Tuberculosis
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="freu" name="antecedentes" class="form-check-input" type="checkbox" value="Fiebre Reumática">
                                <label class="form-check-label" for="freu">
                                    Fiebre Reumática
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="ec" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad Cardiaca">
                                <label class="form-check-label" for="ec">
                                    Enfermedad Cardíaca
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="tg" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Gastricos">
                                <label class="form-check-label" for="tg">
                                    Trastornos Gástricos
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="er" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad Renal">
                                <label class="form-check-label" for="er">
                                    Enfermedad Renal
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="th" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Hormonales">
                                <label class="form-check-label" for="th">
                                    Trastornos Hormonales
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="neu" name="antecedentes" class="form-check-input" type="checkbox" value="Neuralgia">
                                <label class="form-check-label" for="neu">
                                    Neuralgia
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="aam" name="antecedentes" class="form-check-input" type="checkbox" value="Alergia a algún medicamento">
                                <label class="form-check-label" for="aam">
                                    Alergia a algún medicamento
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="sida" name="antecedentes" class="form-check-input" type="checkbox" value="Infección Venérea o SIDA">
                                <label class="form-check-label" for="sida">
                                    Infección venérea o SIDA
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="colest" name="antecedentes" class="form-check-input" type="checkbox" value="Colesterol">
                                <label class="form-check-label" for="colest">
                                    Colesterol
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="art" name="antecedentes" class="form-check-input" type="checkbox" value="Artitris">
                                <label class="form-check-label" for="art">
                                    Artitris
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="tumor" name="antecedentes" class="form-check-input" type="checkbox" value="Algún tumor">
                                <label class="form-check-label" for="tumor">
                                    Algún tumor
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="form-check">
                                <input id="piel" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad de la piel">
                                <label class="form-check-label" for="piel">
                                    Enfermedad de la piel
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="emba" name="antecedentes" class="form-check-input" type="checkbox" value="Embarazo">
                                <label class="form-check-label" for="emba">
                                    Embarazo
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="ds" name="antecedentes" class="form-check-input" type="checkbox" value="Discrasias sanguíneas">
                                <label class="form-check-label" for="ds">
                                    Discrasias sanguíneas
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="tp" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos psicológicos">
                                <label class="form-check-label" for="tp">
                                    Trastornos psicológicos
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="fuma" name="antecedentes" class="form-check-input" type="checkbox" value="Fuma">
                                <label class="form-check-label" for="fuma">
                                    Fuma
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="alco" name="antecedentes" class="form-check-input" type="checkbox" value="Alcoholismo">
                                <label class="form-check-label" for="alco">
                                    Alcoholismo
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="drog" name="antecedentes" class="form-check-input" type="checkbox" value="Drogadicción">
                                <label class="form-check-label" for="drog">
                                    Drogadicción
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="canc" name="antecedentes" class="form-check-input" type="checkbox" value="Cáncer">
                                <label class="form-check-label" for="canc">
                                    Cáncer
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="oe" name="antecedentes" class="form-check-input" type="checkbox" value="Otra enfermedad">
                                <label class="form-check-label" for="oe">
                                    Otra enfermedad
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="medic" name="antecedentes" class="form-check-input" type="checkbox" value="Toma algún medicamento">
                                <label class="form-check-label" for="medic">
                                    Toma algún medicamento
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input id="quir" name="antecedentes" class="form-check-input" type="checkbox" value="Quirúrgicos">
                                <label class="form-check-label" for="quir">
                                    Quirúrgicos
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input id="quimio" name="antecedentes" class="form-check-input" type="checkbox" value="Quimioterapia o Radioterapia">
                                <label class="form-check-label" for="quimio">
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
                    <textarea id="familiares" class="form-control" placeholder="Descripción" rows="1"></textarea>
                </div>
                <br>
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
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Alguna vez se le ha fracturado algún diente?
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
                            ¿Respira por la boca?
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
                            ¿Sufrió algún golpe en los dientes?
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
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Cuándo?
                        </label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <textarea id="cuando_golpe_dientes" class="form-control" placeholder="Escribir detalle" rows="2"></textarea>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-8">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Tiene dificultad para hablar?
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
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckDefault">
                            Otros
                        </label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <textarea id="cuando_dificultad_hablar" class="form-control" placeholder="Escribir detalle" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
