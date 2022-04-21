@extends('layouts.main')

@section('title', 'Abastecer')

@section('content')

<h1>Abasteça seu carro</h1>

<div id="suplly-create-container" class="col-md-6 offset-md-3">
	<h1>Abasteça seu carro</h1>
	<form action="/supllys" method="POST">
		<!--Diretiva csrf para adicionar dados no banco-->
		@csrf
		<div class="form-group">
			<label>Cliente:</label>
			@foreach($users as $user)
				<input type="text" disabled  class="form-control" id="id_user_name" name="id_user_name" value="{{$user['name']}}">
				<input type="hidden" class="form-control" id="id_user" name="id_user" value="{{$user['id']}}">
			@endforeach
		</div>
		<div class="form-group">
			<label>Valor:</label>
			<input type="number" class="form-control" onkeyup="muda_litros()" id="value" name="value" placeholder="Ex: 14,00">
		</div>
		<div class="form-group">
			<label>Quilometragem atual:</label>
			<input type="number" class="form-control" id="km_atually" name="km_atually" placeholder="Quilometragem do seu carro">
		</div>
		<div class="form-group">
			<label>Quantidade de litros:</label>
			<input type="number" disabled class="form-control" onkeyup="muda_litros()" id="disabled" name="disabled" placeholder="Quantidade de litros">
			<input type="hidden" class="form-control" onkeyup="muda_litros()" value="" id="qtd_liters" name="qtd_liters" placeholder="Quantidade de litros">
		</div>
		<div class="form-group">
			<label>Valor por litro-  R$:7,00</label>
			<input type="text" disabled class="form-control" id="disabled" name="disabled" placeholder="Valor por litro" value="07.00">
			<input type="hidden" class="form-control" id="value_per_liters" name="value_per_liters" placeholder="Valor por litro" value="07.00">
		</div>
		<div class="form-group">
			<label>Cidade:</label>
			<select name="cidade" id="cidade" class="form-control">
				<option value="0">Fortaleza</option>
				<option value="1">Natal</option>
				<option value="2">Pará</option>
			</select>
		</div>

		<div class="form-group">
			<label>Carro:</label>
			<select name="id_car" id="id_car" class="form-control">
				@foreach($cars as $car)
				@php
					echo "<pre>";
			            var_dump($cars);
			        echo "</pre>";
			    @endphp
					<option value="{{$car['id']}}">{{$car['plate']}}</option>
				@endforeach
			</select>
		</div>
		<input type="hidden" class="form-control" id="latitude" name="latitude" value="178965">
		<input type="hidden" class="form-control" id="longitude" name="longitude"  value="178965">
		<input type="submit" class="btn btn-primary" value="Abastecer">
		
	</form>
</div>

<script type="text/javascript">
	function muda_litros(){
	var valor= document.getElementById('value').value;
	var valor_por_litro = document.getElementById('value_per_liters').value;
	var qtdlitros= valor/valor_por_litro;
	var campo_qtdlitros = document.getElementById('qtd_liters').value = qtdlitros;
	console.log(campo_qtdlitros);
}
	function muda_litros_hidden(){
		var valor= document.getElementById('value').value;
		var valor_por_litro = document.getElementById('value_per_liters').value;
		var qtdlitros= valor/valor_por_litro;
		var campo_qtdlitros = document.getElementById('qtd_liters').value = qtdlitros;
		console.log(campo_qtdlitros);
}
</script>
@endsection