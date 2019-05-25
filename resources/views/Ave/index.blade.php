@extends('Ave.layout')

@section('content');

<h1 class="text-center">AVISTAMIENTO DE AVES</h1>

<div class="container">
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Ave</th>
        <th scope="col">Descubridor</th>
        <th scope="col">Lugar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aves as $ave)
            <tr>
            <th scope="row">{{ $ave->id }}</th>
            <td>{{ $ave->ave }}</td>
            <td>{{ $ave->responsable }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection