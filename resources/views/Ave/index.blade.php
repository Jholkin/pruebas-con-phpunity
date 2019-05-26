@extends('Ave.layout')

@section('content');

<h1 class="text-center">AVISTAMIENTO DE AVES</h1>

<div class="container">

    <a class="btn btn-info mb-2" href="{{ route('ave.create') }}">Nuevo avistamiento</a>

    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Ave</th>
        <th scope="col">Descubridor</th>
        <th scope="col">Lugar de referencia</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aves as $ave)
            <tr>
            <th scope="row">{{ $ave->id }}</th>
            <td><a href="{{ route('ave.show', $ave->id) }}">{{ $ave->ave }}</a></td>
            <td>{{ $ave->responsable }}</td>
            <td>{{ $ave->lugar_referencia }}</td>
            <td><a class="btn btn-info" href="{{ route('ave.edit', $ave->id) }}">Editar</a>
            <form action="{{ route('ave.destroy', $ave->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info mt-1" onclick="return confirm('Quiere borrar el registro?')">Eliminar</button>
            </form>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $aves->links() }}
</div>

@endsection