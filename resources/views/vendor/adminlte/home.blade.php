@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<h1>Nombre del Equipo</h1>
	<div class="contenedor">
		<div class="columnas1">
			<div class="jugador">
				<div class="imagen">
					<img src="https://www.pes-patch.com/wp-content/uploads/2016/07/Download-PES2013-Lionel-Messi-by-Facemaker-EmreT.jpg" alt="jugador X">
				</div>
				<div class="grafico">
					<img src="https://image.ibb.co/g3mL3R/estadistica.png" alt="jugador X">
				</div>
			</div>

			<div class="jugadores">
				<h2>Lista de jugadores</h2>
				<div class="lista">
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>
					<p class="nombres">XXXXXXXXXX</p>					
				</div>				
			</div>
		</div>

		<div class="columnas2">
			<div class="caracteristicas propias">
				<h2>Datos del jugador</h2>
				<div class="informacion">
					<p class="etiquetas">Nombre del jugador</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Apellidos del jugador</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Fecha de nacimiento</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Lugar de nacimiento</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Grupo sanguíneo</p>
					<p class="datos">xxxx</p>
				</div>
			</div>
			<div class="caracteristicas detalle">
				<h2>Detalles del jugador</h2>
				<div class="informacion">
					<p class="etiquetas">Pases completos</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Pases errados</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Total de pases</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Asistencias</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Porcentaje de pases</p>
					<p class="datos">xxxx</p>
				</div>
				<div class="informacion">
					<p class="etiquetas">Minutos jugados</p>
					<p class="datos">xxxx</p>
				</div>					
			</div>
		</div>
	</div>
@endsection
