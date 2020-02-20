@extends('layouts.template')
@section('titulo','Unit 19 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="listening">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit19/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p style="margin-top:16px;">The Character Panel Is The Most Important Part Of Text Formating. It Is Used To Change A<br>
                Variety Of Factors In The Text, Such As Size, Spacing, Font Style, Colors And More. You Can<br>
                Change The Distance Between Paragraphs As Well.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
