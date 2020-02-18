@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade14" data-etapa="listening">
				<h3 class="barlow">UNIT 14 -  COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit14/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        <b>Typography</b> Tools Are Used To <b>Select</b> Fonts And Change Font <b>Size</b>, Whereas Color Tools
                        Are Mainly Used To <b>Choose</b>, Modify Or <b>Create</b> Colors. All Of These Tools Are <b>Fundamental</b>
                        In Graphic <b>Design</b> Production.
                    </p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
