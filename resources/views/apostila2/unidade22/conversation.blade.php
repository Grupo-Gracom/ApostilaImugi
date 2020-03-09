@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">

			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22" data-etapa="conversation">
				<h3 class="barlow">UNIT 22</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p><b>Gleen:</b>  Guys, talking about the best time of our lives, our childhood, what else could you
				guys do by then.</p>
				<p><b>Students:</b> What do you wanna mean teacher?</p>
				<p><b>Gleen:</b> Things that you had the ability to do. For example: I could draw super heroes
					very well but I couldn’t use any software to digitize the drawings.</p>
				<p><b>Laura:</b> Teacher, I feel in love with cameras when I was a teenager. That’s why a love
					making videos today. I started as a photographer. I could add special effects to pictures.
					I could not treat them in the beginning but I took some courses and I improved a lot. I
					can do may things today because of this courses.</p>
				<p><b>Akira:</b> Teacher, I was very clumsy. I couldn’t do anything well. So, most of the times I
					stayed in my bedroom playing. There, I could play, read my comic books and nobody
					bothered me.</p>
				<p><b>Gleen:</b>  Great guys. Next class I have to change the organization of the class ok. I’ll need
					some help.</p>
					<p><b>Students:</b> ok teacher, you can count on us.</p>
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