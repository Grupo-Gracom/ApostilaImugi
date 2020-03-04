7@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="conversation">
				<h3 class="barlow">UNIT 57</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit57/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>Gleen :</b>  Guys, what did you find difficult so far?  
				</p>
				<p>
					<b>John :</b>  Teacher, I believe that being concise and objective is a big challenge. When you start
					creating the movie, you have a lot of crazy ideas and it’s important to be aware of the constraints you have to decide what fits into the project.
				</p>
				<p>
					<b>Akira :</b>  Yes, we would have made a lot of mistakes without your guidance. Just for you to have
					an idea, we were so excited with the characters that we had been working on their creation
					for almost two weeks when you called our attention to the idea of linearity and all that stuff
					related to sequencing, script and etc.
				</p>
				<p>
					<b>Laura :</b>  Yes teacher, but everything is going right now. We have already started creating the
					characters and the scenarios in Cinema 4D.
				</p>
				<p>
					<b>Gleen :</b>  Cool guys. That’s great. Ok. I’ll see you in the next class ok.
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit56/pagina-1.png') }}" alt="estudos">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
