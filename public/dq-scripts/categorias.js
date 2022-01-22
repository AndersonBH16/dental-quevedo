$(document).ready(function () {
    mostrarListaCategorias();
});

let tablaCategorias = $('#tablaCategorias');
let bodytablaCategorias = $('#filasListaCategorias');
let listaCategoriasDatatable = null;
let listaTotalCategorias = {};
let temporallistaTotalCategorias = {};

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
    { data: 'nombre_categoria' },
    { data: 'cantidad' },
    { data: 'descripcion' },
    { data: 'acciones' }
];

function obtenerFilasTablaCategorias(value) {
    return {
        ...value,
        nombre_categoria: value.nombre_categoria,
        cantidad: 'cantid productos',
        descripcion: value.descripcion,
        acciones: `<div class="text-center">
                        <button class="btn btn-outline-success btn-sm"><span class="fa fa-edit"></span></button>
                        <button class="btn btn-outline-danger btn-sm"><span class="far fa-trash-alt"></span></button>
                  </div>`
    };
}

function rowJson(data, type, value, meta) {
    item = obtenerFilasTablaCategorias(value);
    listaTotalCategorias[value.id] = item;

    return item[columns[meta.col].data];
}

function mostrarListaCategorias(){
    bodytablaCategorias.show();
    listaCategoriasDatatable = tablaCategorias.DataTable({
        serverSide: true,
        ajax: {
            url: '/categorias_total',
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
            { width: 40, targets: 0, render: rowJson },
            { width: 80, targets: 1, render: rowJson },
            { width: 40, targets: 2, render: rowJson },
            { width: 10, targets: 3, render: rowJson },
            { visible: true },
            { orderable: true},
        ],
        lengthMenu: [[25, 50, 100], [25, 50, 100]],
        language: DATA_TABLE_CONFIG
    });
    tablaCategorias.on( 'page.dt', function () {
        pageNumber = listaCategoriasDatatable.page();
    });
}

let pageNumber = 0;
