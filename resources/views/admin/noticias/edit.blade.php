@extends('layouts.admin')

@section('titulo', 'Administración | Editar noticia')
@section('titulo2', 'Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<p>Hola hermano 1</p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar noticia: {{ $noticia->id }}</h3>
                </div>
                <div class="card-body">

                    <form method="POST" action="#">

                        @csrf
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" value="{{ $noticia->titulo }}" name="txtTitulo" class="form-control" />
                        </div>

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