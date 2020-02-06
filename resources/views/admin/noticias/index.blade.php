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

                                        <form method="POST" action="">

                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                                <i class="fas fa-times"></i>
                                            </button>

                                            <div class="modal fade" id="modal-danger">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Danger Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <p>One fine body&hellip;</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

                                                        <!-- {{route('noticias.destroy', $noticia->id) }} -->
                                                        <button type="submit" href="{{route('noticias.destroy', $noticia->id) }}" class="btn btn-outline-light">Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                        </form>

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
<script>
    function eliminarClick(del) {

    }
</script>
@endsection