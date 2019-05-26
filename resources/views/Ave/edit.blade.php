@extends('Ave.layout')

@section('content');

<h1 class="text-center">ACTUALIZAR AVISTAMIENTO</h1>
<hr>
<div class="container">
    <form action="{{ route('ave.update', $ave->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre de Ave:</strong>
                        <input type="text" name="ave" value="{{ $ave->ave }}" class="form-control" placeholder="Nombre del ave">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad:</strong>
                        <input type="text" name="cantidad" value="{{ $ave->cantidad }}" class="form-control" placeholder="Número de aves vistas">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Lugar de referencia:</strong>
                        <input type="text" name="lugar_referencia" value="{{ $ave->lugar_referencia }}" class="form-control" placeholder="Lugar de referencia donde se vió al ave">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre del Responsable:</strong>
                        <input type="text" name="responsable" value="{{ $ave->responsable }}" class="form-control" placeholder="Nombre del responsable">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                <a class="nav-link" href="{{ route('ave.index') }}">Regresar</a>
            </div> 
    </form>
</div>

@endsection