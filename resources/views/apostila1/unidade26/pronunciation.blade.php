@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade26" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Practice The Pronunciation Of The Underlined Words In The Sentences.</h5>
				<p>1. I Used To Work With Her</p>
				<p>2. We Were Talking On The Phone.</p>
				<p>3. She Stopped The Car For The Children To Pass.</p>
				<p>4. Did He Use To Go To Work By Bus?</p>
				<p>5. Were They Watching Tv In The Afternoon?</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection