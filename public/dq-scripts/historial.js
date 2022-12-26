const token = $("input[name=_token]").val();

const obtenerValoresHistorialMedico = () => {
    return {
        // 1.Filacion
        'edad': $('#edad').val(),
        'sexo': $('#sexo').val(),
        'religion': $('#religion').val(),
        'lugarNacimiento': $('#lugarNacimiento').val(),
        'telefono': $('#telefono').val(),
        'email': $('#email').val(),
        'ocupacion': $('#ocupacion').val(),
        'grado_instruccion': $('#grado_instruccion').val(),
        'estado_civil': $('#estado_civil').val(),
        'nacionalidad': $('#nacionalidad').val(),
        'telefono_emergencia': $('#telefono_emergencia').val(),
        // 2. Motivo
        'motivo_consulta': $('#motivo_consulta').val(),
        // 3. Enfermedad Actual
        'tiempo_enfermedad': $('#tiempo_enfermedad').val(),
        'signos_sintomas_princip': $('#signos_sintomas_princip').val(),
        'relato_enfermedad': $('#relato_enfermedad').val(),
        // 4. Antecedentes
        // 'hiper_hepa'              : $('#hiper_hepa').val(),
        // 'diab_anem'               : $('#diab_anem').val(),
        // 'tt_epil'                 : $('#tt_epil').val(),
        // 'tbc_freu'                : $('#tbc_freu').val(),
        // 'ec_rg'                   : $('#ec_rg').val(),
        // 'er_th'                   : $('#er_th').val(),
        // 'neu_aam'                 : $('#neu_aam').val(),
        // 'sida_colest'             : $('#sida_colest').val(),
        // 'art_tumor'               : $('#art_tumor').val(),
        // 'piel_emba'               : $('#piel_emba').val(),
        // 'ds_tp'                   : $('#ds_tp').val(),
        // 'fuma_alco'               : $('#fuma_alco').val(),
        // 'drog_canc'               : $('#drog_canc').val(),
        // 'oe_medic'                : $('#oe_medic').val(),
        // 'quirurg'                 : $('#quirurg').val(),
        // 'qimio_radio'             : $('#qimio_radio').val(),
        'amp': $('#amp').val(),
        'familiares': $('#familiares').val(),
        // 'e1'                      : $('#e1').val(),
        // 'e2'                      : $('#e2').val(),
        // 'e3'                      : $('#e3').val(),
        // 'e4'                      : $('#e4').val(),
        // 'e5'                      : $('#e5').val(),
        // 'e6'                      : $('#e6').val(),
        // 'e7'                      : $('#e7').val(),
        // 'e8'                      : $('#e8').val(),
        // 'e9'                      : $('#e9').val(),

        // III. Diagnóstico Presuntivo
        'diag_pres': $('#diag_pres').val(),

        // IV. Pruebas Complementarias
        'periapical' : $('#radio_peri').val(),
        'bite_wing': $('#radio_bw').val(),
        'oclusal': $('#radio_oclu').val(),
        'panom': $('#radio_pano').val(),
        'cefalo': $('#radio_cefa').val(),
        'tac': $('#tac').val(),
        'hemo': $('#hemograma').val(),
        'biopsia': $('#biopsia').val(),

        // V. Diagnóstico Definitivo
        'diagnostico_def': $('#diagnostico_def').val(),
        // VI. Pronostico
        'pronostico': $('#pronostico').val(),
        // VII. Presupuesto
        'presupuesto': $('#presupuesto').val(),
        // VIII. Plan tratamientos y recomendaciones
        'plan_trat_recomend': $('#plan_tratamiento_recomendaciones').val(),
        'control_evoluc': $('#control_evoluc').val()
    };
}

$('#btnGuardarHistorialMedico').click(function(){
    console.log("********************** pikachu ***************************");
    console.log(obtenerValoresHistorialMedico());

    $.ajax({
        type        : 'POST',
        url         : `/historial-clinico/`,
        headers     : { "X-CSRF-TOKEN": token },
        data        : { dataPaciente: obtenerValoresHistorialMedico },
        success     : response => {

        },
        error: function (error){
            if(error.response){
                console.log(error.response.data);
            }
        }
    });
});
