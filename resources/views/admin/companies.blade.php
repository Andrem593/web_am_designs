@extends('adminlte::page')

@section('content')
    <!-- Create Company Form -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Company</h3>
        </div>
        <form action="{{ route('companies.store') }}" method="POST">
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="name">Empresa</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Company</button>

            </div>
        </form>
    </div>

    <!-- Companies Table -->
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->nombre }}</td>
                    <td>
                        <!-- Update Company Form -->
                        <form action="" method="POST" class="d-inline-block">
                            @csrf
                            @method('PUT')

                            <input type="text" name="name" value="{{ $company->nombre }}" class="form-control">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>

                        <!-- Delete Company Form -->
                        <form action="{{route('companies.destroy', $company->id)}}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
