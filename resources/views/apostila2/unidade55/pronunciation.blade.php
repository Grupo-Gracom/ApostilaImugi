@extends('layouts.template')
@section('titulo','Unit 55 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade55" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 55</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio55/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>v sound</b> /v/ </li>        
					<li>Version</li>	
					<li>Video Develop</li>
					<li>Deliver Creative</li>
					<li>Improve</li>
				</ul>
				<p style="margin-top:32px">
					The agency developed a new version of the video to be delivered next week.
					It’s more creative. They improved it a lot. 
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
