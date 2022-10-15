@extends('materias.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Inserir Materia</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('materias.index')}}">Voltar</a>
	</div>
</div>
@if($errors->any())
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Some error occured!</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  <ul>
		  	@foreach($errors->all() as $error)
		  	<li>{{$error}}</li>
		  	@endforeach
		  </ul>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-12">
		<form method="POST" action="{{route('materias.store')}}">
			@csrf
			<div class="mb-3">
			    <label for="RA" class="form-label">RA</label>
			    <input type="text" class="form-control" id="RA" name="RA" placeholder="RA">
		  	</div>
		  	<div class="mb-3">
			    <label for="Nome" class="form-label">Nome</label>
			    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome">
		  	</div>
              <div class="mb-3">
			    <label for="Sobrenome" class="form-label">Sobrenome</label>
			    <input type="text" class="form-control" id="Sobrenome" name="Sobrenome" placeholder="Sobrenome">
		  	</div>
			  <div class="mb-3">
			  <label for="Filmes" class="form-label">Filmes</label>
				<select name="filmes[]" multiple class="form-control">
					@if(count($filmes) > 0)
						@foreach($filmes as $filme)
						<option value="{{ $filme['id'] }}">{{ $filme['nome'] }}</option>
					@endforeach
					@else
						<option colspan="4">Record not found!</option>
					@endif
				</select>
				<script>
					$(document).ready(function() {
						$('.filmes').select2();
					});
				</script>
			</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>
@endsection