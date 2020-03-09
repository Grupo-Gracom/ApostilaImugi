@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 45</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>                             
                <h5 class="barlow">Improving pronunciation - / k / / q /.</h5>
                <div class="metade esquerda center-align">
                    <p><b>K</b>angaroo</p>
                    <p>Wa<b>k</b>e</p>
                    <p><b>K</b>oo<b>k</b></p>                    
                </div>
                <div class="metade direita center-align">
                    <p><b>K</b>now</p>
                    <p><b>Quo</b>te</p>
                    <p><b>Que</b>stion</p>                    
                </div>
                <div class="clear"></div>                             
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
