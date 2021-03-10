@extends('layouts.template')
@section('titulo','Unit 12 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade12" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 12</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 12/01_VOCABULARY/VOCABULARY_12.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Direct Message</b></p></li>
					<li><p><b>Engagement</b></p></li>
					<li><p><b>Engagement rate</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Fellas</b></p></li>
					<li><p><b>Tools</b></p></li>
					<li><p><b>Empathy</b></p></li>
					<li><p><b>Insights</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Enough</b></p></li>
					<li><p><b>Reach</b></p></li>
					<li><p><b>Shoot</b></p></li>
					<li><p><b>Thought</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
