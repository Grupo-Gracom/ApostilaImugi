@extends('layouts.template')
@section('titulo','Unit 30 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 30</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 30/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO DIE / of hunger / of thirsty / of cancer</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO FEEL / sorry / comfortable / happy / sad / free</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO LIE / to somebody / </b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 30/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Clearer</b></li>
						<li><b>In love</b></li>
						<li><b>Briefing</b></li>
						<li><b>Awesome</b></li>
						<li><b>Both</b></li>
						<li><b>Spend</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
