@extends('layouts.template')
@section('titulo','Unit 33 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade33"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 33</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 33/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<div class="espacamento">
					<p><b>TO SMOKE </b>/ cigarette / a cigar / outdoor</p> 
					<p><b>TO START </b>/ a relationship / a game / talking </p>
					<p><b>TO STOP </b>/ dancing / to dance / to smoke / smoking</p>
				</div>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 33/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>

				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>ENGAGEMENT</b></p></li>
					<li><p><b>SUPPORTIVE</b></p></li>
					<li><p><b>FEEL</b></p></li>
					<li><p><b>STRAIGHT</b></p></li>
					<li><p><b>BEING</b></p></li>
					<li><p><b>NUBIE</b></p></li>
					<li><p><b>PROMOTE</b></p></li>
					<li><p><b>MISS</p></li>
					<li><p><b>LAB</p></li>
				</ul>							
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
