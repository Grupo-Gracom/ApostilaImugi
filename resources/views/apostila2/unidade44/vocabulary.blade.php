@extends('layouts.template')
@section('titulo','Unit 44 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 44</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 44/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top:16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO TASTE </b>/ good / awful</p>
				<p><b>TO UNDESTAND </b>/ a question / a problem / a person</p>
				<p><b>TO ASK </b>/ a question / a favor / permission</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 44/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Character</b></p>
				</li>
				<li>
					<p><b>Introspective</b></p>
				</li>
				<li>
					<p><b>Weird</b></p>
				</li>
				<li>
					<p><b>Talkative</b></p>
				</li>
				<li>
					<p><b>Sales</b></p>
				</li>
				<li>
					<p><b>Addicted</b></p>
				</li>
				<li>
					<p><b>Seasons</b></p>
				</li>
				<li>
					<p><b>Accords</b>
				</li>
				</p>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>
@endsection
