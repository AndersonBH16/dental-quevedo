$(document).ready(function () {
    mostrarListaPacientes();
});

let tablaPacientes = $('#tablaPacientes');
let bodyTablaPacientes = $('#filasListaPacientes');
let listaPacientesDatatable = null;
let listaTotalPacientes = {};
let temporalListaTotalPacientes = {};

const DATA_TABLE_CONFIG = {
    decimal: ",",
    thousands: ".",
    lengthMenu: "Mostrar _MENU_ registros",
    zeroRecords: "No se encontraron resultados",
    searchPlaceholder: "Buscar proformas",
    info: "Registros de _START_ al _END_ de un total de _TOTAL_ registros",
    infoEmpty: "No se encontraron registros disponibles",
    infoFiltered: "(filtrado de un total de _MAX_ registros)",
    oPaginate : {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior"
    },
    search: "Buscar:",
    LoadingRecords: "Cargando..."
};

let columns = [
    { data: 'dni' },
    { data: 'apellido_paterno' },
    { data: 'apellido_materno' },
    { data: 'nombre_completo' },
    { data: 'fecha_nacimiento' },
    { data: 'email' },
    { data: 'telefono' },
    { data: 'opciones' },
];

function obtenerFilasTablaPacientes(value) {
    return {
        ...value,
        dni: value.dni,
        apellido_paterno: value.apellidoPaterno,
        apellido_materno: value.apellidoMaterno,
        nombre_completo: value.nombreCompleto,
        fecha_nacimiento: value.fechaNacimiento,
        email: value.email,
        telefono: value.telefono,
        opciones: `<div class="dropdown text-center">
                        <button class="btn btn-dark bg-cyan btn-flat dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opciones
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('ver_histograma', $dni->value.dni)}}">
                                <i class="fa fa-h-square mr-2" style="color: darkcyan"></i>
                                Ver Histograma
                            </a>
                            <a class="dropdown-item btnOpenOdontogram" data-dni="${value.dni}" href="javascript:;">
                                <i class="fa fa-h-square mr-2" style="color: darkcyan"></i>
                                Odontograma Inicial
                            </a>
                        </div>
                  </div>`
    };
}

function itemJson(data, type, value, meta) {
    item = obtenerFilasTablaPacientes(value);
    listaTotalPacientes[value.idPacientes] = item;

    return item[columns[meta.col].data];
}

function mostrarListaPacientes(){
    bodyTablaPacientes.show();
    listaPacientesDatatable = tablaPacientes.DataTable({
        serverSide: true,
        ajax: {
            url: '/pacientes_total',
            data: function(d){
                d.server_search = {
                    value: d.search.value,
                    regex: d.search.regex,
                };
                d.search.value = "";

                d.server_order = d.order;
                d.order = [];
            },
        },
        initComplete : function() {
            let input = $('.dataTables_filter input').unbind();
            let self = this.api();
            let $searchButton = $('<button>')
                .text('Buscar')
                .click(function() {
                    self.search(input.val()).draw();
                });
            $(input).keyup(function (e) {
                if (e.keyCode === 13) {
                    self.search(input.val()).draw();
                }
            });
            $('.dataTables_filter').append($searchButton);
        },
        columns: columns,
        ordering: true,
        order: [],
        autoWidth : false,
        responsive: true,
        columnDefs: [
            { width: 40, targets: 0, render: itemJson },
            { width: 80, targets: 1, render: itemJson },
            { width: 40, targets: 2, render: itemJson },
            { width: 50, targets: 3, render: itemJson },
            { width: 10, targets: 4, render: itemJson },
            { width: 10, targets: 5, render: itemJson },
            { width: 10, targets: 6, render: itemJson },
            { width: 10, targets: 7, render: itemJson },
            { visible: true },
            { orderable: true},
        ],
        lengthMenu: [[25, 50, 100], [25, 50, 100]],
        language: DATA_TABLE_CONFIG
    });
    tablaPacientes.on( 'page.dt', function () {
        pageNumber = listaPacientesDatatable.page();
    });
}

let pageNumber = 0;
