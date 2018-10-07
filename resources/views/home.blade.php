@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @permission('admin')
                        <h1>Tienes permiso de administrador</h1>
                    @endpermission

                    @permission('user')
                        <h1>Tienes permiso de usuario</h1>
                    @endpermission

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
