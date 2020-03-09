@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 31</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p>Improving pronunciation - / <b>ch</b> / / <b>sh</b> /</p>
                
                <table class="metade left-align">
                    <tr>
                        <td><p><b>Sh</b>aron</p></td>
                        <td><p><b>Ch</b>arles</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Sh</b>e</p></td>
                        <td><p><b>Sh</b>aron</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Sh</b>y</p></td>
                        <td><p><b>Sh</b>e</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Sh</b>op</p></td>
                        <td><p><b>Sh</b>y</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Sh</b>ips</p></td>
                        <td><p><b>Sh</b>op</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Sh</b>eet</p></td>
                        <td><p><b>Sh</b>ips</p></td>
                    </tr>
                </table>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection