@extends('layouts.template')
@section('titulo','Unit 53 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade53" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 53</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 53/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>ng sound</b> /ŋ/ </li>        
					<li>Single</li>	
					<li>Distinguish</li>
					<li>HungerBring</li>
					<li>Long</li>
					<li>Wrong</li>
				</ul>
				<p style="margin-top:32px">
					They can’t distinguish a single problem. There’s a hunger to bring a new illustrator, but
					this is a long process. We gotta find out what’s wrong first. 
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
