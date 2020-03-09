@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="conversation">
				<h3 class="barlow">UNIT 54</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit54/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>John :</b>  Teacher, some famous names of Hollywood had a hard time in the beginning of
					their careers. I know that Silvester Stalone, Jackie Chang and Will Smith started in low
					budget movies. But they persisted and got their chances to star blockbusters and became very famous and rich.  
				</p>
				<p>
					<b>Gleen :</b>  Hard working and persistence are key elements to be successful in any career.
				</p>
				<p>
					<b>Laura :</b>  I love Will Smith. He has stared unforgettable movies. From the famous comedy
					“The fresh prince of Bel-Air” to the touching Drama “The pursuit of happiness”. He has
					worked in many other famous movies as well. He is awesome.
				</p>
				<p>
					<b>Gleen :</b>  A big name in Hollywood. Ok guys. That’s it for today. I see you in the next class. Take care.
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit54/pagina-1.png') }}" alt="atores">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection