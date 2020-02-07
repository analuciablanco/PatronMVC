@extends('layouts.admin')

@section('titulo', 'Administración | Crear usuario')
@section('titulo2', 'Usuarios')

@section('breadcrumbs')
@endsection

@section('contenido')

<a class="btn btn-primary btn-sm" 
    style="margin-left: 8px; margin-bottom: 15px;" 
    href="{{ route('usuarios.index') }}">
    
    <i class="fas fa-arrow-left"></i> 
    Volver a lista de usuarios</a>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear usuario</h3>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('usuarios.store') }}">

                        @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtName" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="txtEmail" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="text" name="txtPassword" class="form-control"/>
                        </div>

                        <div class="form-group"> 
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('estilos')
@endsection
@section('scripts')
@endsection