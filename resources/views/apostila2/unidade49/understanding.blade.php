@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade49" data-etapa="understanding">
				<h3 class="barlow">UNIT 49</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <div class="metade">
                    <form id="unidade49understanding335" method="post">
                        <p>
                            1. What was fantastic about the animation Gleen recommended to students to see ?<br>
                            <input type="text" name="understanding335-1" placeholder="Responda aqui" class="full left-align" required>
                        </p>
                        <p>
                            2. Why does he use it as an example of good movie ?<br>
                            <input type="text" name="understanding335-2" placeholder="Responda aqui" class="full left-align" required>
                        </p>
                        <p>
                            3. What does he say about the movie outcome ?<br>
                            <input type="text" name="understanding335-3" placeholder="Responda aqui" class="full left-align" required>
                        </p>
                        <p>
                            4. What do remarkable movies do with their viewers ?<br>
                            <input type="text" name="understanding335-4" placeholder="Responda aqui" class="full left-align" required>
                        </p>
                        <p>
                            5. What example does John remember ?<br>
                            <input type="text" name="understanding335-5" placeholder="Responda aqui" class="full left-align" required>
                        </p>
                        
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="49">
                        <input type="hidden" name="atividade_id" value="335">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit1/pagina-1.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="metade direita">
                    <iframe id="joguin1" src="{{ asset('assets/games/2049-master/2049-master/index.html') }}" frameborder="0" style="width:60%; height:600px;"></iframe>
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

        $("#unidade49understanding335").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade49understanding335 input[type="text"]').each(function(index){
                if(($('#unidade49understanding335 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade49understanding335 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade49understanding335'), respostas);
            }else{
                enviarAtividade($('#unidade49understanding335'), respostas);
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
                        $('#unidade49understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade49understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade49understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade49understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
