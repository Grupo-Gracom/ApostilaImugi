@extends('layouts.template')
@section('titulo','Unit 34 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">

			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34" data-etapa="conversation">
				<h3 class="barlow">UNIT 34</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p><b>Gleen:</b> Hello guys, how’s it going? I hope you are prepared for the second part of our
					course. We’ll have the chance to debate about movie making and etc. We saw the
					functions of cinema 4D. Some details about Unity and something about blender.
					Actually, I saw some animations with them and they are awesome. Ok, let’s start.
					Would you mid if I asked you something?</p>
				<p><b>Students:</b> Of course not, teacher</p>
				<p><b>Gleen:</b> Ok, what do you think about starting a project following all the steps from the
					beginning to the end to create a 2 minutes animation.</p>
				<p><b>Laura:</b> Wow. It would be fantastic. We could take advantage of our specific skills to start
						the project. Great idea teacher. I’m in.</p>
				<p><b>John:</b> Me too teacher.</p>
				<p><b>Akira:</b> Awesome teacher. But, Would you mind helping me with the creation of the story.
					I’m not that creative.</p>
				<p><b>Laura and John:</b> Don’t worry Akira, we help you with the story and you help us with
					Drawings.</p>
				<p><b>Akira:</b> Deal guys.</p>
				<p><b>Gleen:</b> Ok, then let’s get down to business.</p>
				<p> (to be continued…)</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
