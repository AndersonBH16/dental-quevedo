
document.addEventListener('DOMContentLoaded', function() {
    // var formulario = document.querySelector("form");
    //
    // var calendarEl = document.getElementById('agenda');
    // var calendar = new FullCalendar.Calendar(calendarEl, {
    //     initialView     : 'dayGridMonth',
    //     editable        : true,
    //     locale          : "es",
    //     headerToolbar   : {
    //         left    : 'prev, next, today',
    //         center  : 'title',
    //         right   : 'dayGridMonth'
    //     },
    //     events          : '/citas',
    //     dateClick       : function(info){
    //         $('#crearCita').modal("show");
    //     },
    // });
    // calendar.render();
});

const token = $("input[name=_token]").val();
let botonEliminar = $('#btnEliminar');
let botonActualizar = $('#btnActualizarCita');
let botonRegistrar = $('#btnRegistrarCita');

const accionCita = (info, tipoEvento) => {
    abrirModal(info, tipoEvento);
};

const mostrarModalCitas = () => {
    $('#accionCitas').modal("show");
};

const limpiarInputsModal = () => {
    $('#titulo').val('');
    $('#cita_descripcion').val('');
    $('#paciente').val('');
}

const habilitarInputsModal = (flag) => {
    if(flag === "activar"){
        $('#titulo').prop('disabled', false);
        $('#cita_descripcion').prop('disabled', false);
        $('#time_start').prop('disabled', false);
        $('#minutes').prop('disabled', false);
        $('#paciente').prop('disabled', false);
    }else{
        $('#titulo').prop('disabled', true);
        $('#cita_descripcion').prop('disabled', true);
        $('#time_start').prop('disabled', true);
        $('#minutes').prop('disabled', true);
        $('#paciente').prop('disabled', true);
    }
};

const habilitarBotonesModal = (flag) => {
    if(flag === "activar"){
        botonEliminar.prop('disabled', false);
        botonRegistrar.prop('disabled', false);
        botonActualizar.prop('disabled', false);
    }else{
        botonEliminar.prop('disabled', true);
        botonRegistrar.prop('disabled', true);
        botonActualizar.prop('disabled', true);
    }
};

function abrirModal(info, tipoEvento){
    habilitarBotonesModal("activar");
    habilitarInputsModal("activar");
    if(tipoEvento === "crearCita"){
        let currentDate = moment(info.dateStr).format("YYYY-MM-DD");
        let time_start = moment(info.date).format("HH:mm:ss");

        $('#tituloModalCitas').text('REGISTRAR CITA');
        limpiarInputsModal();
        $('#fecha').val(currentDate);
        $('#start').val(time_start);
        $('#btnRegistrarCita').attr('hidden', false);
        $('#btnActualizarCita').attr('hidden', true);
        $('#btnEliminar').attr('hidden', true);

        mostrarModalCitas();
    }else if(tipoEvento === "actualizarCita"){
        idCita = info.event.id;
        $('#btnRegistrarCita').attr('hidden', true);
        $('#btnActualizarCita').attr('hidden', false).attr('data-id', idCita);
        $('#btnEliminar').attr('hidden', false);

        $.ajax({
            type        : 'GET',
            url         : `/citas/${idCita}`,
            headers     : { "X-CSRF-TOKEN": token },
            success     : response => {
                console.log(response)
                console.log(response.estado)
                let fecha_start = response.fecha;
                let hora_inicio = response.start;

                if(response.estado === "0"){
                    habilitarInputsModal("desactivar");
                    habilitarBotonesModal("desactivar");
                }

                $('#tituloModalCitas').text('ACTUALIZAR CITA');
                $('#titulo').val(response.titulo);
                $('#cita_descripcion').val(response.descripcion);
                $('#fecha').val(fecha_start);
                $('#time_start').val(hora_inicio);
                $('#minutes').val();
                $('#paciente').val(response.paciente);

                mostrarModalCitas();
            },
            error: function (error){
                if(error.response){
                    console.log(error.response.data);
                }
            }
        });
    }
}

document.getElementById("btnRegistrarCita").addEventListener("click", function (){
    let fecha = $('#fecha').val();
    let hora_inicio = $('#time_start').val();
    let minutos = $('#minutes').val();
    let hora_inicial = moment(fecha+" "+hora_inicio).format('HH:mm:ss');
    let hora_final = moment(fecha+" "+hora_inicio).add(minutos, 'm').format('HH:mm:ss');

    const datosFormularioCitas = {
        titulo      : $('#titulo').val(),
        descripcion : $('#cita_descripcion').val(),
        fecha       : fecha,
        time_start  : hora_inicial,
        time_end    : hora_final,
        paciente    : $('#paciente').val()
    };

    $.ajax({
        type        : 'POST',
        url         : '/citas',
        headers     : { "X-CSRF-TOKEN": token },
        data        : datosFormularioCitas,
        beforeSend  : response => {
        },
        success     : response => {
            if(response){
                alert("Cita Agendada")
                $("#crearCita").modal("hide");
            }
        },
        error: function (error){
            if(error.response){
                console.log(error.response.data);
            }
        },
        complete: result => {
            location.reload();
        }
    });
});

document.getElementById("btnActualizarCita").addEventListener("click", function (){
    let fecha = $('#fecha').val();
    let hora_inicio = $('#time_start').val();
    let minutos = $('#minutes').val();
    let hora_inicial = moment(fecha+" "+hora_inicio).format('HH:mm:ss');
    let hora_final = moment(fecha+" "+hora_inicio).add(minutos, 'm').format('HH:mm:ss');

    const datosFormularioCitas = {
        titulo      : $('#titulo').val(),
        descripcion : $('#cita_descripcion').val(),
        fecha       : fecha,
        time_start  : hora_inicial,
        time_end    : hora_final,
        paciente    : $('#paciente').val()
    };

    const idCita = $('#btnActualizarCita').attr('data-id');

    $.ajax({
        type        : 'PATCH',
        url         : `/citas/${idCita}`,
        headers     : { "X-CSRF-TOKEN": token },
        data        : datosFormularioCitas,
        beforeSend  : response => {
        },
        success     : response => {
            alert("Cita Actualizada")
            $("#crearCita").modal("hide");
        },
        error: function (error){
            if(error.response){
                console.log(error.response.data);
            }
        },
        complete: result => {
            location.reload();
        }
    });
});

document.getElementById("btnEliminar").addEventListener("click", function (){
    const idCita = $('#btnActualizarCita').attr('data-id');
    console.log(idCita);

    $.ajax({
        type        : 'DELETE',
        url         : `/citas/${idCita}`,
        headers     : { "X-CSRF-TOKEN": token },
        beforeSend  : response => {
        },
        success     : response => {
            $("#crearCita").modal("hide");
        },
        error: function (error){
            if(error.response){
                console.log(error.response.data);
            }
        },
        complete: result => {
            location.reload();
        }
    });
});
