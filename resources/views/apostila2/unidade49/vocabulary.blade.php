@extends('layouts.template')
@section('titulo','Unit 49 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade49"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 49</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 49/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO CHANGE / attitude / opinion / my clothes / the color</p>
				<p>TO CREATE / questions / problems / </p>
				<p>TO GET / nervous / angry / anxious / a bus / a headache</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 49/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>RECITING</b></li>
					<li><b>IDEALIZATION</b></li>
					<li><b>ITSELF</b></li>
					<li><b>ULTIMATELY</b></li>
					<li><b>OUTCOME</b></li>
					<li><b>PREACH</b></li>
					<li><b>BEFOREHAND</b></li>
					<li><b>GUIDED</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
