@extends('layouts.template')
@section('titulo','Unit 1 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 01</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 1/1. VOCABULARY/VOCABULARY A.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - CARDINAL NUMBERS / ORDINAL NUMBERS</h5>

				<table class="metade center-align">
					<tr>
						<td><p class="barlow upper">Cardinal</p></td>
						<td><p class="barlow upper">Ordinal</p></td>
						<td><p class="barlow upper">Cardinal</p></td>
						<td><p class="barlow upper">Ordinal</p></td>
					</tr>
					<tr>
						<td><p>1 - one</p></td>
						<td><p>1st - first</p></td>
						<td><p>6 - six</p></td>
						<td><p>6th - sixth</p></td>
					</tr>
					<tr>
						<td><p>2 - two</p></td>
						<td><p>2nd - second</p></td>
						<td><p>7 - seven</p></td>
						<td><p>7th - seventh</p></td>
					</tr>
					<tr>
						<td><p>3 - three</p></td>
						<td><p>3rd - third</p></td>
						<td><p>8 - eight</p></td>
						<td><p>8th - eighth</p></td>
					</tr>
					<tr>
						<td><p>4 - four</p></td>
						<td><p>4th - forth</p></td>
						<td><p>9 - nine</p></td>
						<td><p>9th - ninth</p></td>
					</tr>
					<tr>
						<td><p>5 - five</p></td>
						<td><p>5th - fifth</p></td>
						<td><p>10 - ten</p></td>
						<td><p>10th - tenth</p></td>
					</tr>
				</table>								
				<div class="clear"></div>				
				<h5 class="barlow" style="margin-top: 16px">B – WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 1/1. VOCABULARY/VOCABULARY B.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>What’s up</b></p></li>
					<li><p><b>Congrats</b></p></li>
					<li><p><b>Spent</b></p></li>
					<li><p><b>Almost</b></p></li>
					<li><p><b>Start</b></p></li>
					<li><p><b>Concepts</b></p></li>
					<li><p><b>Learned</b></p></li>
					<li><p><b>Way</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
