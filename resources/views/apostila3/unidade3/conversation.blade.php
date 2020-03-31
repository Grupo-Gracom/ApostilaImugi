@extends('layouts.template')
@section('titulo','Unit 3 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade3" data-etapa="conversation">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>

			<p><b>Jake:</b> Hey you everybody. How’s everything? Are you ok?</p>
			<p><b>Students:</b> We’re great teacher.</p>
			<p><b>Jake:</b> So, let’s start the game ok. Let me tell you what we are gonna study during the
				course. First, we’ll understand the social media phenomenon. Second, we’ll see some
				examples of people who are having great results using it. Aft er that, we are going to
				understand how the build their audiences on the web. We are gonna talk about their
				purposes. Why they decided to have a channel for example.</p>
			<p><b>Akira:</b> Very nice teacher. So, there’s a structure, a kind of step by step procedure to
				start your project from scratch.</p>
			<p><b>Laura:</b> Teacher, I thought that many of these famous Youtubers became successful by
				accident.</p>
			<p><b>Jake:</b> Laura, I believe that the old ones didn’t expect having the results they have.
				Aft er reaching millions of people, they saw that all this could become a business and
				then they decided to make things more professional.</p>
			<p><b>John:</b> Is it true that the creators of Youtube, decided to sell it for google for millions of
				dollars?</p>
			<p><b>Jake:</b> Yes, It’s true. Right aft er they called the att enti on of traditi onal media players,
				they sold it to Google for 1.6 billion of dollars in 2006.</p>
			<p><b>Akira:</b> Man, I didn’t know that.</p>
			<p><b>Jake:</b> Yeah my dear friends. Welcome to the fascinati ng world of causing impact
				through YouTube.
				<b>(To be continued)</b></p>

			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit29/conversation.jpg') }}" alt="pensando grafico">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection