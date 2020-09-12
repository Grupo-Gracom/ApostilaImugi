@extends('layouts.template')
@section('titulo','Unit 3 | Title, Eff ects Controls, Créditos finais
Type')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="video_musical">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 10 – Video Musical e Apresentação de projetos Finais</h5>
			<h5>Type Tool (Title) e o Painel Essential Graphics</h5>
			<h5>AMV</h5>
			<p>
				AMV pode significar: Anime Music Video, um clipe de video e audio, de uma ou mais série de
				animes ou desenhos animados japoneses. (fonte: Wikipedia)
			</p><br>
			<h5>GMV</h5>
			<p>
				O GMV segue os mesmos padrões do AMV (Anime Music Video). Porém, ao invés de utilizar
				clipes de animes ou desenhos animados, o foco passa a ser as cutscenes de games.
			</p><br>
			<h5>TRAILER</h5>
			<p>
				Trailer é um videoclipe criado para anunciar um filme, série, seriado, jogo eletrônico ou uma
				outra publicação. (fonte: Wikipedia)
			</p>
			<h5>Projeto Curta Metragem</h5>
			<p>
				Curta-metragem, ou simplesmente curta, é o nome que se dá a um filme de pequena duração.
				Nesta aula o professor deverá apresentar a proposta do segundo projeto final valendo nota
				que será um curta metragem desenvolvido pelos alunos, aplicando técnicas abordadas em
				todo o curso.
			</p>	


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection