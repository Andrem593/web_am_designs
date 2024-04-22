@extends('adminlte::page')

@section('content')
    <div class="p-2 w-50 mx-auto">
        <div class="card card-warning card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    @if ($user->profile_picture)
                        <img src="{{ Storage::url($user->profile_picture) }}" alt="{{ $user->name }}">
                    @else
                        <img src="https://via.placeholder.com/150/{{ substr($user->name, 0, 2) }}/FFFFFF?text={{ substr($user->name, 0, 2) }}"
                            alt="{{ $user->name }}">
                    @endif
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
@stop
