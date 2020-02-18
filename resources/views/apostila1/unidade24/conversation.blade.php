@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade24" data-etapa="conversation">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Marcelo :</b> Teacher, i’m practicing my drawing on photoshop and i’m trying to make a face. 
					It’s not so easy. There are many lines that I need to fix. I need to make these lines less aparent, but I don’t want to delete
					them completely because I would like to keep the original drawing for future reference.</p>
				<p><b>Sarah :</b>  I understand, Marcelo. There is a simple solution to your complex problem. Can anyone tell us what it is? </p>
				<p><b>Mariana :</b> Is it the eraser, sarah?</p>
				<p><b>Sarah :</b>  that’s right! However, you need to change the opacity of the eraser first. This way, the line is not entirely erased.</p>
				<p><b>Mariana :</b> Oh I see! Marcelo! Thanks, teacher! I’ll try that.</p>
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