@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 19</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>             
                <p class="esquerda" style="color:green;">ow sound /aʊ/</p>                
                <ul class="lista-inline">                                        
                    <li><b>FoundHouse</b></li>                    
                    <li><b>Brown</b></li>                    
                    <li><b>South</b></li>                    
                    <li><b>Down</b></li>                    
                    <li><b>Town</b></li>                                   
                </ul>
                <div class="clear"></div>
                <p>I founf a brown house in south down town.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
