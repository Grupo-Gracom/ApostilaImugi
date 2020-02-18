@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade30" data-etapa="listening">
				<h3 class="barlow">UNIT 30 -  VIDEO EFFECTS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit30/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        <b>Adding</b> Effects To Videos Sounds Like A Pretty Complicated <b>Activity</b>, But Actually, It
                        Doesn’t Take <b>Much</b>. You Just <b>Need</b> To Know A Few Things About Photoshop And <b>Apply</b>
                        It To Your Video. You <b>Can</b> Have Great Results If You Use <b>Your</b> Imagination.
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