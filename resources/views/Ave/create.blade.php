@extends('Ave.layout')

@section('content');

<h1 class="text-center">REGISTRAR AVISTAMIENTO</h1>

<div class="container">
    <form action="{{ route('aves.store') }}" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre de Ave:</strong>
                        <input type="text" name="ave" class="form-control" placeholder="Nombre del ave">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad:</strong>
                        <input type="text" name="cantidad" class="form-control" placeholder="Número de aves vistas">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Lugar de referencia:</strong>
                        <input type="text" name="lugar_referencia" class="form-control" placeholder="Lugar de referencia donde se vió al ave">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre del Responsable:</strong>
                        <input type="text" name="responsable" class="form-control" placeholder="Nombre del responsable">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>   
    </form>
</div>

@endsection