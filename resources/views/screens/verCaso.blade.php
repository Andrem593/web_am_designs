@extends('adminlte::page')

@section('content')
    <div class="pt-2">
        <x-adminlte-card theme="orange" title="Ticket {{ $ticket->id }}" theme-mode="outline">
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
                        @php
                            $estado = $ticket->estado == 1 ? 'ACTIVO' : 'CERRADO';
                        @endphp
                        <label>Estado:</label>
                        <input type="text" class="form-control" disabled value="{{ $estado }}">
                    </div>
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

            <div class="row">
                <div class="col-12">
                    <h4>Actividad sobre el Ticket</h4>
                    {{-- <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                            </span>
                            <span class="description">Shared publicly - 7:45 PM today</span>
                        </div>

                        <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore.
                        </p>
                        <p>
                            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                        </p>
                    </div> --}}
                </div>
            </div>
        </x-adminlte-card>
    </div>
@stop
