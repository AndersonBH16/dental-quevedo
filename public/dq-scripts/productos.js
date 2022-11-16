$(document).ready(function () {
    mostrarListaProductos();
});

let tablaProductos = $('#tablaProductos');
let bodyTablaProductos = $('#filasListaProductos');

let listaTotalProductos = {};
let listaProductosDatatable = null;

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
    { data : 'imagen' },
    { data : 'nombreProducto' },
    { data : 'descripcion' },
    { data : 'marca' },
    { data : 'modelo' },
    { data : 'serie' },
    { data : 'stock' },
    { data : 'precio' },
    { data : 'estado' },
    { data : 'nombre_categoria' }
];

function obtenerFilasTablaProductos(value) {
    let activo = value.estado;

    return {
        ...value,
        imagen          : value.imagen,
        nombreProducto  : value.nombreProducto,
        descripcion     : value.descripcion,
        marca           : value.marca,
        modelo          : value.modelo,
        serie           : value.serie,
        stock           : `${value.stock}<b> unids.</b>`,
        precio          : `<b>S/.</b>${value.precio}`,
        estado          : activo === "ACTIVO" ?
                        '<div class="bg-olive color-palette text-center"><span>Activo</span></div>' :
                        '<div class="bg-danger color-palette text-center"><span>Inactivo</span></div>',
        nombre_categoria: value.nombre_categoria,
        opciones        : `<div class="text-center">
                                <button class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-outline-danger btn-sm"><i class="fa fa-window-close"></i></button>
                            </div>`
    };
}

const itemJson = (data, type, value, meta) => {
    console.log("values categorias");
    console.log(value);
    item = obtenerFilasTablaProductos(value);
    listaTotalProductos[value.idProducto] = item;
    // console.log("lista total productos:");
    // console.log(item);
    // console.log("lista total productos:");
    // console.log(listaTotalProductos);
    return item[columns[meta.col].data];
};

const mostrarListaProductos = () => {
    bodyTablaProductos.show();

    listaProductosDatatable = tablaProductos.DataTable({
        serverSide: true,
        ajax: {
            url: '/productos_total',
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
        columns     : columns,
        ordering    : true,
        order       : [],
        autoWidth   : false,
        responsive  : true,
        columnDefs  : [
            { width: 170, targets: 0, render: itemJson },
            { width: 120, targets: 1, render: itemJson },
            { width: 150, targets: 2, render: itemJson },
            { width: 40, targets: 3, render: itemJson },
            { width: 10, targets: 4, render: itemJson },
            { width: 10, targets: 5, render: itemJson },
            { width: 10, targets: 6, render: itemJson },
            { width: 10, targets: 7, render: itemJson },
            { width: 10, targets: 8, render: itemJson },
            { width: 10, targets: 9, render: itemJson },
            { width: 10, targets: 10, render: itemJson },
            { visible: true },
            { orderable: true},
        ],
        lengthMenu: [[5, 50, 100], [5, 50, 100]],
        language: DATA_TABLE_CONFIG
    });

    tablaProductos.on( 'page.dt', function () {
        pageNumber = listaProductosDatatable.page();
    });
};

