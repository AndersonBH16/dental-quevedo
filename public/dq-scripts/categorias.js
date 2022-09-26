$(document).ready(function () {
    mostrarListaCategorias();
});

let tablaCategorias = $('#tablaCategorias');
let bodyTablaCategorias = $('#filasListaCategorias');

let listaTotalCategorias = {};
let listaCategoriasDatatable = null;

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
    { data : 'nombre_categoria' },
    { data : 'descripcion' },
    { data : 'cant_prod' },
    { data : 'estado' },
    { data : 'opciones' }
];

function obtenerFilasTablaPacientes(value) {
    let activo = value.estado;

    return {
        ...value,
        nombre_categoria : value.nombre_categoria,
        descripcion      : value.descripcion,
        cant_prod        : `<div class="text-center">
                                0000.00
                           </div>`,
        estado           : activo === "ACTIVO" ?
                            '<div class="bg-olive color-palette text-center"><span>Activo</span></div>' :
                            '<div class="bg-danger color-palette text-center"><span>Inactivo</span></div>',
        opciones         : `<div class="text-center">
                                <button class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-outline-danger btn-sm"><i class="fa fa-window-close"></i></button>
                            </div>`
    };
}

const itemJson = (data, type, value, meta) => {
    item = obtenerFilasTablaPacientes(value);
    console.log("ITEM******")
    console.log(item)
    listaTotalCategorias[value.id] = item;
    return item[columns[meta.col].data];
};

const mostrarListaCategorias = () => {
    bodyTablaCategorias.show();

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
            { width: 200, targets: 0, render: itemJson },
            { width: 300, targets: 1, render: itemJson },
            { width: 50, targets: 2, render: itemJson },
            { width: 40, targets: 3, render: itemJson },
            { width: 10, targets: 4, render: itemJson },
            { visible: true },
            { orderable: true},
        ],
        lengthMenu: [[5, 50, 100], [5, 50, 100]],
        language: DATA_TABLE_CONFIG
    });

    tablaCategorias.on( 'page.dt', function () {
        pageNumber = listaCategoriasDatatable.page();
    });
};
