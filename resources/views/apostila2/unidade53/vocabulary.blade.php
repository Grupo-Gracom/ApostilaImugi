@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade53" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 53</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit53/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO WANT / something badly TO BELIEVE / in love / in God / somebody</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO HURT / yourself / my feelings</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Sick</b></li>
						<li><b>Blink</b></li>
						<li><b>Till</b></li>
						<li><b>Around</b></li>
						<li><b>Huge</b></li>
						<li><b>Appealing</b></li>
						<li><b>Captivating</b></li>
						<li><b>Hangar</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection