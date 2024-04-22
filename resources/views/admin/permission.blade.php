@extends('adminlte::page')

@section('content')
    <div class="row p-2">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Permission</h3>
                </div>
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Permission Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Permission</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Assign Permission to Role</h3>
                </div>
                <form action="{{ route('permissions.assign') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role_id" required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permission">Permission</label>
                            <select class="form-control" id="permission" name="permission_id" required>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Assign Permission</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Permissions</h3>
                </div>
                <!-- Permissions Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Permission Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <a href="{{ route('permissions.destroy', $permission->id) }}" class="btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this permission?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop
