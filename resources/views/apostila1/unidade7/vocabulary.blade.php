@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<p><b>Goal:</b> Teach students verb conjugation in the simple present; Focus on pronunciation of plurals.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit7/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>SAY</b></li>
					<li><b>REMEMBER</b></li>
					<li><b>ADJUSTMENT</b></li>
					<li><b>UTILIZE</b></li>
					<li><b>GIVE</b></li>
					<li><b>EFFECT</b></li>					
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
