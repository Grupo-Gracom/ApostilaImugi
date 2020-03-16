@extends('layouts.template')
@section('titulo','Unit 34 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 34</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 34/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<div class="espacamento">
					<p><b>TO SWIM </b>/ well / in the lake / in a swimming pool / in the sea</p>
					<p><b>TO TIE </b>/ the shoes / the knot</p>
					<p><b>TO TRAIN </b>/ a group of people / someone / staff / a team</p>
				</div>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 34/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>

				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>HOPE</b></p></li>
					<li><p><b>SAW</b></p></li>
					<li><p><b>TAKE</b></p></li>
					<li><p><b>ADVANTAGE</b></p></li>
					<li><p><b>SKILLS</b></p></li>
					<li><p><b>TO BE IN</b></p></li>
					<li><p><b>WORRY</b></p></li>
					<li><p><b>DEAL</p></li>
				</ul>							
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
