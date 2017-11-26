@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-4">
				{!! Form::open([ 'route' => ['equipo.store', 'method' => 'post'] ]) !!}
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Registro de Equipo</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						
						<div class="form-group col-md-12">
							<div class="img-circle img-equipo" alt="Team Image" style="">								
								
							</div>
							<div class="btn-subir_imagen">
								<a class="btn btn-success" id="uploadImageTeam">Subir Imagen</a>
								<input type="file" name="" class="hidden" id="fileteam">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre" class="form-control">
							<label for="nombre">Fecha Fundacion:</label>
							<input type="date" name="fecha_fundacion" class="form-control">
							<label for="nombre">Ciudad:</label>
							<input type="text" name="ciudad" class="form-control">
							<label for="nombre">País:</label>
							<input type="text" name="pais" class="form-control">
							
						</div>


					</div>
					<!-- /.box-body -->
					<input type="submit" id="submit" class="btn btn-primary">
				</div>
				<!-- /.box -->
					{!! Form::close() !!}
			</div>
		</div>
	</div>

	<script src="{{ asset('/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script>
    	$(function(){
    		$("#uploadImageTeam").click(function(){
             $("#fileteam").click();
        
        	})	
    	})
        
    </script>

@endsection
