@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Registro de Jugador</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						
						<div class="form-group col-md-5">
							<div class="img-circle img-jugador" alt="Player Image" style="">								
								
							</div>
							<div class="btn-subir_imagen_v2">
								<button class="btn btn-success" id="uploadImagePlayer">Subir Imagen</button>
								<input type="file" name="" class="hidden" id="filejugador">
							</div>
						</div>
						<div class="form-group col-md-7">
							<label for="nombre">Nombres:</label>
							<input type="text" name="nombre" class="form-control">
							<label for="nombre">Apellidos:</label>
							<input type="text" name="apellido" class="form-control">
							<label for="nombre">Fecha Nacimiento:</label>
							<input type="date" name="fecha_nacimiento" class="form-control">
							<label for="nombre">Lugar Nacimiento:</label>
							<input type="text" name="lugar_nacimiento" class="form-control">							
							<label for="nombre">Grupo Sanguineo:</label>
							<input type="text" name="grupo_sanguineo" class="form-control">							
							<label for="nombre">Equipo:</label>
							<Select class="form-control" id="equipo">
								<option>Equipo A</option>								
							</Select>
							
						</div>


					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>

	<script src="{{ asset('/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script>
    	$(function(){
    		$("#uploadImagePlayer").click(function(){
             $("#filejugador").click();
        
        	})	
    	})
        
    </script>

@endsection
