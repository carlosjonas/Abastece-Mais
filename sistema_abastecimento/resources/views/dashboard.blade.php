@extends('layouts.main')

@section('title', 'Abastece Mais')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Carros</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-supllys-container">
    @if(count($cars) > 0)

    @else
        <p>Você ainda não possui carros, <a href="/car/create">adicionar carro</a></p>
    @endif

</div>

@endsection