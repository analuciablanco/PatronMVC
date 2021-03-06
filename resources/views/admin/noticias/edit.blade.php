@extends('layouts.admin')

@section('titulo', 'Administración | Editar noticia')
@section('titulo2', 'Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<p>Hola hermano 1</p>

<a class="btn btn-primary btn-sm" 
    style="margin-left: 8px; margin-bottom: 15px;" 
    href="{{ route('noticias.index') }}">
    
    <i class="fas fa-arrow-left"></i> 
    Volver a lista de noticias</a>

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
                    <h3 class="card-title">Editar noticia: {{ $noticia->id }}</h3>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('noticias.update', $noticia->id) }}">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" name="txtTitulo" value="{{ $noticia->titulo }}" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Imagen de portada</label>
                            <input type="file" name="imgPortada" class="form-control"/>
                        </div>

                        @if($noticia->portada)
                        <img style="width: 50px; height: auto;" src="/storage/portadas/{{$noticia->portada}}">
                        @else  
                        <p>No hay imagen cargada.</p>
                        @endif

                        <div class="form-group">
                            <label>Cuerpo</label>
                            <textarea name="txtCuerpo" id="" cols="30" rows="10" class="form-control">{{ $noticia->cuerpo }}</textarea>
                        </div>

                        <div class="form-group"> 
                            <button type="submit" class="btn btn-primary">Actualizar</button>
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