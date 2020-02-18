@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade28" data-etapa="listening">
				<h3 class="barlow">UNIT 28 -  VICTOR’S STUDENTS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit28/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        Photoshop Is Interesting For People Who Work With Images As Well As With Videos Because They Can Edit The Pictures And Videos All In The Same Program. They Don’t Need
                        To Learn How To Use More Complex Softwares. Photoshop Can Do Basic Video Editing.
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