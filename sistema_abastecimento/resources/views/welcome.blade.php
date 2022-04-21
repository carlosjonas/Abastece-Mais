@extends('layouts.main')

@section('title', 'Abastece Mais')

@section('content')
  


	<div id="search-container" class="col-md-12">
		<h1>Procure um abastecimento por data:</h1>
		<form action="/" method="GET">
			<input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
		</form>
	</div>


	<div id="supllys-container" class="col-md-12">
	    <h2>Abastecimentos realizados:</h2>
	    @foreach($supllys as $suplly)
	    <div id="lists-container" class="list-group">
		  <a href="" class="list-group-item list-group-item-action active" aria-current="true">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Valor: {{$suplly->value}}</h5>
		      <small>Data: {{ date('d/m/Y', strtotime($suplly->dt_suplly))}}</small>
		    </div>
		    <p class="mb-1">Km do carro: {{$suplly->km_atually}}</p>
		    <p class="mb-1">Quantidade de litros: {{$suplly->qtd_liters}}</p>
		    <p class="mb-1">Valor por litro: {{$suplly->value_per_liters}}</p>
		    <small>Local: {{$suplly->latitude}} -- {{$suplly->longitude}}</small>
		  </a>
		</div>
		@endforeach
		@if(count($supllys) == 0)
			<p>Não há abastecimentos cadastrados</p>
		@endif
	</div>

	<div id="users-container" class="col-md-12">
	    <h2>Usuários cadastrados:</h2>
	    
	    <div class="list-group">
	    	@foreach($users as $user)
			  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1">Nome: {{$user->name}}</h5>
			      <small></small>
			    </div>
			    <p class="mb-1">Email: {{$user->email}}</p>
			    <small>Senha: {{$user->password}}</small>
			    <p><a href="/suplly/create/{{$user->id}}"  class="btn btn-primary">Abastecer</a></p>
			  </a>
			@endforeach
			@if(count($users) == 0)
				<p>Não há usuários cadastrados</p>
			@endif
		</div>
	</div>


@endsection