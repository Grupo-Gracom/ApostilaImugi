@extends('layouts.template')
@section('titulo','Unit 14 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>		
								
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>				
				<ul class="lista-inline">
					<li><p><b>Geofilter</b></p></li>
					<li><p><b>Handle</b></p></li>
					<li><p><b>Hashtag</b></p></li>												
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><p><b>Eye opening</b></p></li>
					<li><p><b>Approach</b></p></li>
					<li><p><b>Doubts</b></p></li>
					<li><p><b>Poll</b></p></li>
					<li><p><b>Useful</b></p></li>
					<li><p><b>Draw</b></p></li>
					<li><p><b>Suggest</b></p></li>													
					<li><p><b>Carry out</b></p></li>													
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
