@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="understanding">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <form id="unidade5understanding20" method="post">
                    <p>
                        1 -  What is the tool mentioned in the text called?<br>
                        <input type="text" name="understanding20-1" class="full left-align" required>
                    </p>
                    <p>
                        2 -  Does Beatriz know what the tool is used for?<br>
                        <input type="text" name="understanding20-2" class="full left-align" required>
                    </p>
                    <p>
                        3 -  What is Burn tool used for?<br>
                        <input type="text" name="understanding20-3" class="full left-align" required>
                    </p>
                    <p>
                        4 - Who knows what Burn tool is?<br>
                        <input type="text" name="understanding20-4" class="full left-align" required>
                    </p>
                    <p>
                        5 - What does the tool balance?<br>
                        <input type="text" name="understanding20-5" class="full left-align" required>
                    </p>
                    <p>
                        6 - What picture does Kate need to edit the contrast?<br>
                        <input type="text" name="understanding20-6" class="full left-align" required>
                    </p>
                    <p>
                        7 - What is the problem with Kate’s picture?<br>
                        <input type="text" name="understanding20-7" class="full left-align" required>
                    </p>
                    <p>
                        8 - In what situation do you recommend the use of Burn Tool?<br>
                        <input type="text" name="understanding20-8" class="full left-align" required>
                    </p>
                    <p>
                        9 - Do you know how to use Burn Tool?<br>
                        <input type="text" name="understanding20-9" class="full left-align" required>
                    </p>
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="5">
                    <input type="hidden" name="atividade_id" value="20">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div class="metade" style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit5/pagina-1.png') }}" alt="Garotos festejando">
					</figure>
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

        $("#unidade5understanding20").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade5understanding20 input[type="text"]').each(function(index){
                if(($('#unidade5understanding20 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade5understanding20 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade5understanding20'), respostas);
            }else{
                enviarAtividade($('#unidade5understanding20'), respostas);
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
                        $('#unidade5understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade5understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade5understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade5understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
