@extends('layouts.admin')

@section('titulo', 'Administración | Dashboard')
@section('titulo2', 'Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<p>Hola mamá</p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('exito'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                {{ Session::get('exito') }}
            </div>
            @endif

            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> ¡Error!</h5>
                {{ Session::get('error') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de noticias</h3>
                </div>
                <div class="card-body">
                
                    <a href="{{ route('noticias.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"> Agregar noticia</i>
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Noticia</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí van las noticias xd -->
                            @foreach($noticias as $noticia)
                                <tr>
                                    <td>{{ $noticia->titulo }}</td>
                                    <td>
                                        <button class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <button class="btn btn-danger">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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