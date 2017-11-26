@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Equipos Registrados</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<!--FOREACH DE LOS EQUIPOS REGISTRADOS-->			
						<div class="col-md-12">			
							<button class="btn btn-success">CREAR EQUIPO</button>
						</div>
						@for ($i=1;$i < 10 ; $i ++)
						<div class="col-md-3">
							<div class="form-group col-md-12">
								<div class="img-circle img-equipos" alt="Team Image" style="">									
								</div>							
							</div>
							<div class="form-group col-md-12 text-center">
								<label for="nombre" class="">Nombre:</label><br>
								<label class="form-control">equipo_{{$i}}</label>
							</div>
						</div>
						@endfor
						<!--FOREACH DE LOS EQUIPOS REGISTRADOS-->


					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>

	<script src="{{ asset('/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>    

@endsection
