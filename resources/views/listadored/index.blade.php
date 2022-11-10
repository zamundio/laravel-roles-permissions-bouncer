@extends('layouts.admin')
@section('content')

<div class="card" style="width: 60rem;">
    <div class="card-header">
        {{ trans('global.onomasticas.listado_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="listadored" class=" table table-bordered table-striped table-hover datatable display select">
                <thead>
                    <tr>
                        <th class="col-xs-1">
                            <input type="checkbox" class=" selectAll" value="1" id="example-select-all">
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Abrev') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Movil') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.ApellidosRep') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Nombre') }}
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($listadored as $key => $list)
                        <tr data-entry-id="{{ $list->Abrev }}">
                            <td>

                            </td>
                            <td>
                                {{ $list->codigo ?? '' }}
                            </td>
                            <td>
                                {{ $list->num_movil ?? '' }}
                            </td>
                            <td>
                                {{ $list->Abrev ?? '' }}
                            </td>
                            <td>
                                {{ $list->Apellidos ?? '' }}
                            </td>
                            <td>

                                {{ $list->Nombre ?? '' }}



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function () {


        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')

                    return
                }


            }
        }
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)




        var table = $('#listadored').DataTable({
            "pageLength": 20,
            columnDefs: [{
                    width: 3,
                    targets: 0
                },
                {
                    width: 10,
                    targets: 1
                },
                {
                    width: 10,
                    targets: 2
                },
                 {
                 width: 10,
                 targets: 3
                 }
            ].concat($.fn.dataTable.defaults.columnDefs),

            buttons: dtButtons,
            select: {
                style: 'multi+shift',
                selector: 'td:first-child'
            }
        });



        $(".selectAll").on("click", function (e) {
            if ($(this).is(":checked")) {
                table.rows().select();
            } else {
                table.rows().deselect();
            }
        });




    });

</script>
@endsection
