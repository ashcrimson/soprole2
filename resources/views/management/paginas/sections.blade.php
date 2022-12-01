@extends('layouts.management')

@section('title', ucwords($page->nombre))

@section('content')
    <!-- Contenido -->

   <a class="btn btn-primary float-right" href="{{ route('administracion.section.create', ['pag' => $page->id] )}}">Crear seccion</a>

   <h1>{{ ucwords($page->nombre) }}</h1>

   <div class="dx-viewport demo-container">
      <div id="gridContainerSections"></div>
   </div>

   @push('extra-js')

   <script>

      $(document).ready(function() {
         loadTable();
      });

      function loadTable() {

        DevExpress.localization.locale(navigator.language);
        
         var dataGrid = $('#gridContainerSections').dxDataGrid({
            dataSource: '{{ route("administracion.page.sections", $page->slug) }}', // origen de datos
            columnAutoWidth: true, // el nombre lo dice, auto width xdd
            // showBorders: true, // mostrar bordes de la tabla
            hoverStateEnabled: true, // color en la fila al pasar el mouse por encima
            columnHidingEnabled: false, // ocultar columnas si no alcanzan a desplegarse en la resolucion
            allowColumnReordering: true, // permite mover las columnas (cambiar de orden) al actualizar vuelve a la normalidad
            // rowAlternationEnabled: true, // fila de color intercalada
            searchPanel: { // 1 panel para buscar palabras
               visible: true,
               width: 240,
               placeholder: 'Buscar...',
            },
            headerFilter: { // filtro para filtrar al seleccionar valores de la columna en la cabecera
               visible: true,
            },
            filterRow: { //lupita para buscar en columna
               visible: true,
               applyFilter: 'auto', // puede ser auto u onClick
               betweenStartText: 'Inicio',
               betweenEndText: 'Fin',
            },
            pager: { // paginador, cuantas filas se muestran
               allowedPageSizes: [10, 25, 50, 100],
               showInfo: true,
               showNavigationButtons: true,
               showPageSizeSelector: true,
               visible: true,
            },
            paging: { // numero de filas a mostrar
               pageSize: 10,
            },
            columnChooser: { // escoger que columnas se muestran u ocultar al presionar un botón y seleccionar
               enabled: false,
               mode: 'select',
            },

            editing: {
               mode: 'batch',
               allowUpdating: false,
               allowAdding: false,
               allowDeleting: false,
               popup: {
                  title: 'Cantidad',
                  showTitle: true,
                  width: 700,
                  height: 525,
               },
               form: {

               },

            },
            selection: {
               //mode: 'multiple',  //utilizar checkbox en la fila
            },
            columns: [
               {
                  dataField: 'id',
                  caption: 'Id',
                  dataType: 'number',
                  allowEditing: false,
                  visible: false,
                  sortIndex: 1, // al cargar, ordena por esta columna
                  sortOrder: "desc", // orden descendente
               },
               {
                  dataField: 'nombre',
                  caption: 'Nombre',
                  allowEditing: false,
                  width:500
               },

               {
                     dataField: 'orden',
                     caption: 'Orden',
                     allowEditing: false,
                     cellTemplate(container, options){
                        const value = options.data.orden ? options.data.orden : 'No establecido';
                        return $('<div>').append(value);
                     }
                  },
              
               {
                  dataField: 'estado',
                  caption: 'Estado',
                  allowEditing: false,
                  // width:300,
                  lookup: {
                     dataSource: {
                        store: {
                           type: 'array',
                           data: [{
                                 id: 0,
                                 name: 'Inactivo'
                              },
                              {
                                 id: 1,
                                 name: 'Activo'
                              },
                           ],
                           key: "id"
                        },
                     },
                     valueExpr: 'id',
                     displayExpr: 'name'
                  },
               },

               {
                  // dataField: 'idCot',
                  caption: 'Acciones',
                  alignment: 'center',
                  hidingPriority: 0, // prioridad para ocultar columna, n° más alto se oculta primero
                  cellTemplate(container, options) {
                     
                     var route_edit = '{{ route('administracion.section.edit', ':section') }}';
                     var url_edit   = route_edit.replace(':section', options.data.id);

                     var route_delete = '{{ route('administracion.section.destroy', ':section') }}';
                     var url_delete   = route_delete.replace(':section', options.data.id);

                     return $('<a href="' + url_edit + '" class="edit" style="color: #DD5702; font-size: 20px; margin-right:10px;"><i class="fas fa-edit"></i></a> <a class="eliminar_pedido" href="#" data-id="' + options.data.id + '" onclick=eliminar("' + url_delete + '") style="color: #DD5702; font-size: 20px;"><i class="fas fa-trash"></i></a>');

                  },
               },

            ],

         }).dxDataGrid('instance');


      }
   </script>
@endpush
@endsection
