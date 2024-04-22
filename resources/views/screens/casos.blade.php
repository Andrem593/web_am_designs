<div class="pt-2">
    <div class="row">
        <h5>
            <b>TICKETS</b>
        </h5>
    </div>

    <div class="mt-3">
        <x-adminlte-card theme="orange" title="Registro de tickets" theme-mode="outline">
            <x-slot name="toolsSlot">
                <a type="button" class="btn btn-tool" href="{{url('ticket')}}">
                    <i class="fas fa-plus"></i> Nuevo ticket
                </a> 
            </x-slot>

            @php
                $heads = [
                    'ID',
                    'Reportado',
                    'Empresa',
                    'Fecha',
                    'Hora',
                    'Prioridad',
                    'Estado',
                    ['label' => 'Opciones', 'no-export' => true, 'width' => 5],
                ];

                $btnEdit = '<a href="'.url('').'" class="btn btn-xs btn-default text-primary mx-1 shadow-sm" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow-sm" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow-sm" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

                $config = [                
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, ['orderable' => true]],
                ];
            @endphp
            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach ($tickets as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['user']['name'] }}</td>
                        <td>ATLANCTIC</td>
                        <td>{{ $row['fecha'] }}</td>      
                        <td>{{ Carbon\Carbon::parse($row['created_at'])->format('H:i')  }}</td>          
                        <td>{{ $row['prioridad'] }}</td>
                        @if ($row['estado'] == 1)
                            <td><span class="badge bg-success">ACTIVO</span></td>
                        @else
                            <td><span class="badge bg-danger">CERRADO</span></td>
                        @endif
                        <td>
                            <a href="{{url('ticket/'. $row['id']) }}" class="btn btn-xs btn-default text-teal mx-1 shadow-sm" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </x-adminlte-card>
    </div>
</div>
