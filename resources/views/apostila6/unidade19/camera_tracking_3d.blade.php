@extends('layouts.template')
@section('titulo','Unit 19 | After Effects CC - TRACKING')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade19" data-etapa="camera_tracking_3d">
			<h3 class="barlow">UNIT 19 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 21 - CÂMERA TRACKING 3D</h5>

			<h5>Efeito do rastreador de câmera 3D</h5>
			<p>O efeito do rastreador de câmera 3D analisa as seqüências de vídeo para extrair o movimento da câmera e os dados da cena 3D. O movimento da câmera 3D permite que você compile os elementos 3D de forma correta em suas imagens em 2D.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>01.</b>Fazer o tracking do cenário para trabalhar a composição de efeitos e elementos incluídos no cenário ou vídeo.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
