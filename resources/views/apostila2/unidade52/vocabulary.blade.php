@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
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
					<source src="{{ asset('assets/audio/Unit52/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO PHONE / a place / a person</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO PLAN / a trip / on doing something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO SHARE / information / an apartment / love</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Same</b></li>
						<li><b>Milestone</b></li>
						<li><b>Followed</b></li>
						<li><b>Almost Released</b></li>
						<li><b>A couple of</b></li>
						<li><b>Fun</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
