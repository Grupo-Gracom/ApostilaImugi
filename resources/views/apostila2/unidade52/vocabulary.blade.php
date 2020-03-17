@extends('layouts.template')
@section('titulo','Unit 52 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade52" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 52</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 52/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<div class="espacamento">
					<p><b>TO PHONE </b>/ a place / a person</p>
					<p><b>TO PLAN </b>/ a trip / on doing something</p>
					<p><b>TO SHARE </b>/ information / an apartment / love</p>
				</div>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 52/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Same</b></p></li>
					<li><p><b>Milestone</b></p></li>
					<li><p><b>Followed</b></p></li>
					<li><p><b>Almost Released</b></p></li>
					<li><p><b>A couple of</b></p></li>
					<li><p><b>Fun</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
