@extends('adminlte::page')

@section('content')
@section('plugins.TempusDominusBs4', true)
<div class="pt-2">
    <form action="{{ url('ticket') }}" method="post">
        <x-adminlte-card theme="orange" title="Nuevo ticket" theme-mode="outline">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Usuario:</label>
                        <input type="text" class="form-control" disabled value="{{ $user->name }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Fecha Reporte:</label>
                        <x-adminlte-input-date name="fecha" value="{{ $fecha }}" disabled />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Prioridad:</label>
                        <x-adminlte-select name="prioridad">
                            <option>Baja</option>
                            <option>Media</option>
                            <option>Alta</option>
                        </x-adminlte-select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Estado:</label>
                        <input type="text" class="form-control" disabled value="ACTIVO">
                    </div>
                </div>
            </div>

            @php
                $config = [
                    'height' => '200',
                    'width' => '100%',
                ];
            @endphp

            <x-adminlte-text-editor class="w-100" name="descripcion" label="Descripción"
                placeholder="Escribe aqui tu texto ...." :config="$config" />
            <x-slot name="footerSlot">
                <div class="d-flex justify-content-end">
                    <x-adminlte-button type="submit" label="Guardar" icon="fas fa-save" />
                </div>
            </x-slot>
        </x-adminlte-card>
    </form>
</div>
@stop
