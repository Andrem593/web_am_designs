@extends('adminlte::page')




@section('content')
    <div class="p-2">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <form method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Roles</label>
                        <select class="form-control" id="role" name="role" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role">Companies</label>
                        <select class="form-control" id="companies" name="companies" required>
                            @foreach ($empresas as $company)
                                <option value="{{ $company->id }}">{{ $company->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editUserModal"
                                        onclick="setEditFormAction(
                                            {{ $user->id }},
                                            '{{ $user->name }}',
                                            '{{ $user->email }}',
                                            {{ $user->roles->first()->id }},
                                            {{ $user->empresa->id }}
                                        )">Edit</a>
                                    <form method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>












    

    @push('js')
        <script>
            function setEditFormAction(userId, name, email, role, company) {
                const form = document.getElementById('editUserForm');
                form.action = `/admin/users/${userId}`;

                const nameInput = document.getElementById('name-m');
                nameInput.value = name;

                const emailInput = document.getElementById('email-m');
                emailInput.value = email;

                const roleInput = document.getElementById('role-m');
                roleInput.value = role;
                roleInput.selected = true;

                const companyInput = document.getElementById('companies-m');
                companyInput.value = company;
                companyInput.selected = true;
            }
        </script>
    @endpush

    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="editUserForm">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name-m" value="" name="name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="role">Roles</label>
                            <select class="form-control" id="role-m" name="role" required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role">Companies</label>
                            <select class="form-control" id="companies-m" name="companies" required>
                                @foreach ($empresas as $company)
                                    <option value="{{ $company->id }}">{{ $company->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email-m" value="" name="email"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
