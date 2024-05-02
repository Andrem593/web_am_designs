@extends('adminlte::page')

@section('content')
    <div class="pt-2">
        <x-adminlte-card theme="orange" title="Ticket {{ $ticket->id }}" theme-mode="outline">
            <form action="{{ url('ticket/' . $ticket->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input type="text" class="form-control" disabled value="{{ $ticket->user->name }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Fecha Reporte:</label>
                            <x-adminlte-input-date name="fecha" disabled value="{{ $ticket->created_at }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Prioridad:</label>
                            <x-adminlte-select name="prioridad">
                                <option {{ $ticket->prioridad == 'Baja' ? 'SELECTED' : '' }}>Baja</option>
                                <option {{ $ticket->prioridad == 'Media' ? 'SELECTED' : '' }}>Media</option>
                                <option {{ $ticket->prioridad == 'Alta' ? 'SELECTED' : '' }}>Alta</option>
                            </x-adminlte-select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Estado:</label>
                            <x-adminlte-select name="estado">
                                <option value="1" {{ $ticket->estado == 1 ? 'SELECTED' : '' }}>Activo</option>
                                <option value="2" {{ $ticket->estado == 2 ? 'SELECTED' : '' }}>En Proceso</option>
                                <option value="0" {{ $ticket->estado == 0 ? 'SELECTED' : '' }}>Cerrado</option>
                            </x-adminlte-select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Asignado a:</label>
                            <x-adminlte-select name="asignado">
                                <option value="">Selecciona un usuario</option>
                                @foreach ($users as $user)
                                    <option {{ $ticket->usuario_asignado == $user->id ? 'SELECTED' : '' }}
                                        value="{{ $user->id }}">
                                        {{ $user->name }}</option>
                                @endforeach
                            </x-adminlte-select>
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <button type="submit" class="btn btn-primary mt-4">ASIGNAR</button>
                    </div>
                </div>
                @php
                    $config = [
                        'height' => '200',
                        'width' => '100%',
                    ];
                @endphp
                <x-adminlte-text-editor class="w-100" name="descripcion" label="Descripción" disabled
                    placeholder="Escribe aqui tu texto ...." :config="$config">
                    {!! $ticket->descripcion !!}
                </x-adminlte-text-editor>
            </form>

            <form action="{{ url('ticket-activity') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <x-adminlte-text-editor class="w-100" name="description" label="Comentario:"
                                placeholder="Escribe aqui tu texto ...." :config="$config">
                            </x-adminlte-text-editor>
                        </div>
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">GUARDAR COMENTARIO</button>
                    </div>
                </div>
            </form>
            <div class="row my-2">
                <div class="col-12 active tab-pane">
                    <h4>Actividad sobre el Ticket</h4>
                    @foreach ($ticketActivities as $activity)
                        <div class="post mt-2">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="https://via.placeholder.com/150/{{ substr($activity->user->name, 0, 2) }}/FFFFFF?text={{ substr($activity->user->name, 0, 2) }}"
                                    alt="user image">
                                <span class="username">
                                    <a href="#">{{$activity->user->name}}</a>
                                </span>
                                <span class="description">
                                    {{ $activity->created_at->diffForHumans() }}
                                </span>
                            </div>

                            {!! $activity->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </x-adminlte-card>

    </div>
@stop
