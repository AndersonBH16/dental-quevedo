const token = $("input[name=_token]").val();

$('#btnGuardarHistorialMedico').click(function(){
    var arrayAntecedentes = [];

    const datos = {
        // 1.Filacion
        'edad'                  : $('#edad').val(),
        'sexo'                  : $('#sexo').val(),
        'religion'              : $('#religion').val(),
        'lugarNacimiento'       : $('#lugarNacimiento').val(),
        'telefono'              : $('#telefono').val(),
        'email'                 : $('#email').val(),
        'ocupacion'             : $('#ocupacion').val(),
        'grado_instruccion'     : $('#grado_instruccion').val(),
        'estado_civil'          : $('#estado_civil').val(),
        'nacionalidad'          : $('#nacionalidad').val(),
        'telefono_emergencia'   : $('#telefono_emergencia').val(),
        // 2. Motivo
        'motivo_consulta': $('#motivo_consulta').val(),
        // 3. Enfermedad Actual
        'tiempo_enfermedad': $('#tiempo_enfermedad').val(),
        'signos_sintomas_princip': $('#signos_sintomas_princip').val(),
        'relato_enfermedad': $('#relato_enfermedad').val(),
        // 4. Antecedentes
        // 'antecedentes' : $('input:checkbox[name="antecedentes[]"]:checked').val(),
        // 'checkbox_antecedentes' : $("input:checkbox[name=antecedentes]:checked").each(function(){
        //                             arrayAntecedentes.push($(this).val());
        //                           }),

        // 'hiper_hepa'              : document.getElementsByName("hiper_hepa")[0].value,
        // 'diab_anem'               : document.getElementsByName("diab_anem")[0].value,
        // 'tt_epil'                 : document.getElementsByName("tt_epil")[0].value,
        // 'tbc_freu'                : document.getElementsByName("tbc_freu")[0].value,
        // 'ec_tg'                   : document.getElementsByName("ec_tg")[0].value,
        // 'er_th'                   : document.getElementsByName("er_th")[0].value,
        // 'neu_aam'                 : document.getElementsByName("neu_aam")[0].value,
        // 'sida_colest'             : document.getElementsByName("sida_colest")[0].value,
        // 'art_tumor'               : document.getElementsByName("art_tumor")[0].value,
        // 'piel_emba'               : document.getElementsByName("piel_emba")[0].value,
        // 'ds_tp'                   : document.getElementsByName("ds_tp")[0].value,
        // 'fuma_alco'               : document.getElementsByName("fuma_alco")[0].value,
        // 'drog_canc'               : document.getElementsByName("drog_canc")[0].value,
        // 'oe_medic'                : document.getElementsByName("oe_medic")[0].value,
        // 'quir_quimio'             : document.getElementsByName("quir_quimio")[0].value,
        'amp'                     : $('#ampliacion').val(),
        'familiares'              : $('#familiares').val(),

        // 'e1'                      : $('#e1').val(),
        // 'e2'                      : $('#e2').val(),
        // 'e3'                      : $('#e3').val(),
        // 'e4'                      : $('#e4').val(),
        // 'e5'                      : $('#e5').val(),
        // 'e6'                      : $('#e6').val(),
        // 'e7'                      : $('#e7').val(),
        // 'e8'                      : $('#e8').val(),
        // 'e9'                      : $('#e9').val(),

        'idPaciente' : $('#dni').val(),

        // III. Diagnóstico Presuntivo
        'diag_pres': $('#diag_pres').val(),
        // IV. Pruebas Complementarias
        'periapical'    : $('#radio_peri').val(),
        'bite_wing'     : $('#radio_bw').val(),
        'oclusal'       : $('#radio_oclu').val(),
        'panom'         : $('#radio_pano').val(),
        'cefalo'        : $('#radio_cefa').val(),
        'tac'           : $('#tac').val(),
        'hemo'          : $('#hemograma').val(),
        'biopsia'       : $('#biopsia').val(),
        // V. Diagnóstico Definitivo
        'diagnostico_def': $('#diagnostico_def').val(),
        // VI. Pronostico
        'pronostico': $('#pronostico').val(),
        // VII. Presupuesto
        'presupuesto': $('#presupuesto').val(),
        // VIII. Plan tratamientos y recomendaciones
        'plan_trat_recomend': $('#plan_tratamiento_recomendaciones').val(),
        //X. Contro, y Evolución
        'control_evol' : $('#control_evol').val()
    };

    $.ajax({
        type        : 'POST',
        url         : `/historial-clinico/`,
        headers     : { "X-CSRF-TOKEN": token },
        data        : { dataPaciente: datos },
        beforeSend  : response => {
            // $('#btnGuardarHistorialMedico').attr('disabled', true);
            console.log("DATOS");
            console.log(datos);
        },
        success     : response => {
            $('#btnGuardarHistorialMedico').attr('disabled', false);
        },
        error       : function (error){
            if(error.response){
                console.log(error.response.data);
            }
        },
        // complete    : result => {
        //     alert("Se ha guardado la información correctamente")
        // }
    });
});
