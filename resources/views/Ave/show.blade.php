@extends('Ave.layout')

@section('content');
<br>
<div class="container">
    <div class="card" style="width: 18rem;">
    <div class="card-header">
        <h3>{{$ave->ave}}</h3>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$ave->cantidad}}</li>
        <li class="list-group-item">{{$ave->lugar_referencia}}</li>
        <li class="list-group-item">{{$ave->responsable}}</li>
        <li class="list-group-item">{{$ave->created_at}}</li>
    </ul>
    </div>
</div>

@endsection