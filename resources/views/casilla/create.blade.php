@extends('plantilla')
@section('content')
<h1>Sales Graphs</h1>
<style>
.uper {
margin-top: 40px;
 }
</style>
	<div class="card uper">
		<div class="card-header">
			Agregar Casillas
		</div>
		<div class="card-body">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br />
			@endif
			<form method="post" action="{{ route('casilla.store') }} " enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					@csrf
					<label for="ubicacion">Ubicación:</label>
					<input type="text" class="form-control" name="ubicacion" id="ubicacion"/>
				</div>

			<button type="submit" class="btn btn-primary" onClick="return validate()" >Guardar</button>
		</form>
	</div>
</div>

<div style="width: 50%">
    {!! $salesChart->container() !!}
</div>

@endsection

@section('page-script')
	<script type="text/javascript" src="/js/casilla.js"></script>
@stop
