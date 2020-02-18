@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade23" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Observe The Connection Between These Verbs And “To”. Keep In Mind That The Abreviations Are Informal And Spoken Language.</h5>
				<p>Going To > Gonna</p>
				<p>Want To> Gonna</p>
				<p>Got To> Gott a</p>
				<br>
				<p>“I Gott a Go.”</p>
				<p>“I’m Gonna Travel Tomorrow.”</p>
				<p>“Do You Wanna Watch A Movie?”</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
