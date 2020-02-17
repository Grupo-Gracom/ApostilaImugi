@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade16" data-etapa="understanding">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>                
                <form id="unidade16understanding47" method="post" class="metade">
                    <p>
                        1 - Where Was Lara Born?<br>
                        <input type="text" name="understanding47-1" class="full left-align" required>
                    </p>
                    <p>
                        2 - What Does Lara Like To Do?<br>
                        <input type="text" name="understanding47-2" class="full left-align" required>
                    </p>
                    <p>
                        3 - How Oft en Does Lara Use Her Blog?<br>
                        <input type="text" name="understanding47-3" class="full left-align" required>
                    </p>
                    <p>
                        4 - What Is Roberto’s Full Name?<br>
                        <input type="text" name="understanding47-4" class="full left-align" required>
                    </p>
                    <p>
                        5 - What Is Roberto’s Nickname?<br>
                        <input type="text" name="understanding47-5" class="full left-align" required>
                    </p>
                    <p>
                        6 - Where Is Roberto From?<br>
                        <input type="text" name="understanding47-6" class="full left-align" required>
                    </p>
                    <p>
                        7 - What Does Beto Do For A Living?<br>
                        <input type="text" name="understanding47-7" class="full left-align" required>
                    </p>
                    <p>
                        8 - What Is Angelique’s Nati onality?<br>
                        <input type="text" name="understanding47-8" class="full left-align" required>
                    </p>
                    <p>
                        9 - What Is Angelique’s Hobby?<br>
                        <input type="text" name="understanding47-9" class="full left-align" required>
                    </p>
                    <p>
                        10 - Why Is Angelique Studying Photoshop?<br>
                        <input type="text" name="understanding47-10" class="full left-align" required>
                    </p>
                    <p>
                        11 - What Does Marciel Like To Do?<br>
                        <input type="text" name="understanding47-11" class="full left-align" required>
                    </p>
                    <p>
                        12 - How Old Is Marciel?<br>
                        <input type="text" name="understanding47-12" class="full left-align" required>
                    </p>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="47">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit16/U16.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="metade direita">
                    <iframe id="joguin1" src="{{ asset('assets/games/2048-master/2048-master/index.html') }}" frameborder="0" style="width:60%; height:600px;"></iframe>
                </div>

			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade16understanding47").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade16understanding47 input[type="text"]').each(function(index){
                if(($('#unidade16understanding47 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade16understanding47 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16understanding47'), respostas);
            }else{
                enviarAtividade($('#unidade16understanding47'), respostas);
            }
        });

        function checkAtividade(atividade_id){
            request = $.ajax({
                url: window.location.pathname+'/respostasCheck/'+atividade_id,
                type: 'get',
                error: function(){
                    console.log("Erro de retorno de dados.");
                }
            });
            request.done(function(response){
                if(response == 0){
                    console.log("não veio nada");
                }else{
                    var objeto = JSON.parse(response[0].resposta_respostas);
                    var chaves = Object.keys(objeto);
                    var respostas = Object.values(objeto);
                    for(j = 0; j < respostas.length; j++){
                        $('#unidade16understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade16understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade16understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade16understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

        function atualizarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_id" : formId.find('input[name="resposta_id"]').val(),
                "resposta_respostas" : respostas
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

    </script>

@endsection
