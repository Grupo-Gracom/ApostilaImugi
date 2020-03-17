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
				<div class="espaacamento">
					<p><b>TO CHANGE </b>/ attitude / opinion / my clothes / the color</p>
					<p><b>TO CREATE </b>/ questions / problems / </p>
					<p><b>TO GET </b>/ nervous / angry / anxious / a bus / a headache</p>
				</div>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 49/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline" style="margin-top: 16px">
					<li><p><b>RECITING</b></p></li>
					<li><p><b>IDEALIZATION</b></p></li>
					<li><p><b>ITSELF</b></p></li>
					<li><p><b>ULTIMATELY</b></p></li>
					<li><p><b>OUTCOME</b></p></li>
					<li><p><b>PREACH</b></p></li>
					<li><p><b>BEFOREHAND</b></p></li>
					<li><p><b>GUIDED</p></li>
				</ul>							
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
