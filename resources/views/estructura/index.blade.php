@extends('layouts.admin')
@section('content')
@can('onomasticas_show')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <select class="form-control" multiple title="Linea" data-style="form-control" id="SelectJV" name="linea[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($ComboJV as $key => $value) {
                                    echo '<option data-tokens=' . $value["Linea"] . ' value=' . $value["Codigo"] . '>' . $value["Linea"] . '</option>';
                                }
                                ?>
            </select>
            <select class="form-control" multiple title="Gerente de Area" data-style="form-control" id="SelectGA" name="ga[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($ComboGA as $key => $value) {
                                    echo '<option data-tokens=' . $value["Nombre"] . ' value=' . $value["id"] . '>' . $value["Nombre"] . '</option>';
                                }
                                ?>
            </select>
            {{-- <select class="form-control" multiple title="Años en la Empresa" data-style="form-control" id="SelectAños" name="años[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($AñosEmp as $key => $value) {
                                    echo '<option data-tokens=' . $value["Años"] . ' value=' . $value["Id"] . '>' . $value["Años"] . '</option>';
                                }
                                ?>

            </select> --}}
            {{-- <select class="form-control" multiple title="Mes Alta Empresa" data-style="form-control" id="SelectMesesEmp" name="mesesemp[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($ComboMeses as $key => $value) {
                                    echo '<option data-tokens=' . $value["Mes"] . ' value=' . $value["Id"] . '>' . $value["Mes"] . '</option>';
                                }
                                ?>
            </select> --}}


        </div>


    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('global.onomasticas.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="onomasticas" class=" table table-bordered table-striped table-hover datatable display select">
                <thead>
                    <tr>
                        <th class="col-xs-1">
                            <input type="checkbox" class=" selectAll" value="1" id="example-select-all">
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Nombrejv') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.CodigoGA') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.NombreGA') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.ApellidosRep') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.NombreRep') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Codigo_Linea') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Linea') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.mail') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.dni') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.dir') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.pob') }}

                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.cp') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.prov') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.F_Alta') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.F_Nac') }}
                        </th>
                        {{-- <th>
                            {{ trans('global.onomasticas.fields.EDAD') }}
                        </th> --}}
                        <th>
                            {{ trans('global.onomasticas.fields.Movil') }}
                        </th>
                         <th>
                             {{ trans('global.onomasticas.fields.Abrev') }}
                         </th>
                        {{-- <th>
                            {{ trans('global.onomasticas.fields.AÑOSEMP') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.CUMP') }}
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($estructura as $key => $estruct)
                        <tr data-entry-id="{{ $estruct->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $estruct->NombreJV ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->codger ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->NombreGA ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->id ?? '' }}
                            </td>
                            <td>

                                {{ $estruct->ApellidosRep ?? '' }}



                            </td>
                            <td>

                                {{ $estruct->NombreRep ?? '' }}



                            </td>
                            <td>
                                {{ $estruct->Codigo_Linea ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->Linea ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->mail ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->DNI ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->Direccion ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->Poblacion ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->CP ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->Provincia ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->F_Alta ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->F_Nac ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $estruct->EDAD ?? '' }}
                            </td> --}}
                            <td>
                                {{ $estruct->Movil ?? '' }}
                            </td>
                             <td>
                                 {{ $estruct->Abrev ?? '' }}
                             </td>
                            {{-- <td>
                                {{ $estruct->AÑOSEMP ?? '' }}
                            </td>
                            <td>
                                {{ $estruct->CUMP ?? '' }}
                            </td> --}}
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


        $('#SelectJV').multiselect({
            nonSelectedText: 'Linea',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100px'
        });
        $('#SelectGA').multiselect({
            nonSelectedText: 'Gerente de Area',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '200px'
        });
        // $('#SelectAños').multiselect({
        //     nonSelectedText: 'Años Emp',
        //     enableFiltering: true,
        //     enableCaseInsensitiveFiltering: true,
        //     buttonWidth: '150px'
        // });
        // $('#SelectMesesEmp').multiselect({
        //     nonSelectedText: 'Mes Alta  Emp',
        //     enableFiltering: true,
        //     enableCaseInsensitiveFiltering: true,
        //     buttonWidth: '200px'
        // });
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




        var table = $('#onomasticas').DataTable({
            "pageLength": 20,
            columnDefs: [{
                    width: 10,
                    targets: 1
                }, {
                    width: 10,
                    targets: 9,
                    visible: false
                },
                {
                    width: 10,
                    targets: 10
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


        $("#onomasticas_filter.dataTables_filter").append($("#SelectJV"));

        $("#onomasticas_filter.dataTables_filter").append($("#SelecGA"));
        $("#onomasticas_filter.dataTables_filter").append($("#SelectAños"));
        $("#onomasticas_filter.dataTables_filter").append($("#SelectMesesEmp"));

        $("#SelectJV").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectJV :selected').each(function () {
                  console.log($(this).val());
                groupNameFilterApplied.push($(this).val());
            });





            $('#onomasticas').DataTable().column(7).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
        $("#SelectGA").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectGA :selected').each(function () {
                console.log($(this).val());
                 groupNameFilterApplied.push("^" + $(this).val() + "$");
                // groupNameFilterApplied.push("/" + $(this).val() + "/");
            });





            $('#onomasticas').DataTable().column(2).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
        $("#SelectAños").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectAños :selected').each(function () {
                groupNameFilterApplied.push("^" + $(this).val() + "$");
            });


            console.log(groupNameFilterApplied.join('|'));

            $('#onomasticas').DataTable().column(18).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
        $("#SelectMesesEmp").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectMesesEmp :selected').each(function () {
                groupNameFilterApplied.push("/" + $(this).val() + "/");
            });



            console.log(groupNameFilterApplied.join('|'));

            $('#onomasticas').DataTable().column(14).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
    });

</script>
@endsection
