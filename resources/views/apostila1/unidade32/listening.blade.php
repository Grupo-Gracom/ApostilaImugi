@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade32" data-etapa="listening">
				<h3 class="barlow">UNIT 32 -  VICTOR’S REVIEW</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit32/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        Key Frame Is Used In Videos To Determine The Position And Duration Of Effects, While
                        The Video Transition Is Applied When Moving From One Take To The Next, Or From Slide
                        To Slide.
                    </p>
                </div>
				<div class="clear"></div>
            </div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection