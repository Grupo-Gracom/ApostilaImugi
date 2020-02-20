@extends('layouts.template')
@section('titulo','Unit 15 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="grammar">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit15/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h6><b>FUTURE WITH WILL vs. FUTURE WITH GOING TO</b></h6>
                    <p>
                        When you want to express a decision use will; use going to after the decision has been
                        made. When we want to talk about future facts or things we believe to be true about the
                        future, we use will.
                    </p>
                
                   <p>STRUCTURE</p>
                   <p><b>(AFFIRMATIVE):</b>  SUBJECT + WILL + VERB</p>
                   <p>EXAMPLE: I WILL BE HOME AT NIGHT</p>
                   <p><b>(INTERROGATIVE):</b> WILL + SUBJECT + VERB</p>
                   <p>EXAMPLE: WILL YOU BE HOME AT NIGHT?</p>
                   <p><b>(NEGATIVE):</b>  SUBJECT + WILL + NOT + VERB</p>
                   <p>EXAMPLE:  I WILL NOT BE HOME AT NIGHT.</p>
                </div>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete The Sentences With The Verbs In Parenthesis Using Will.</h5>
				<form id="unidade15grammar42" method="post">
                    <p>1. EVA <input type="text" name="grammar42-1" required/> ( NOT TRAVEL) TO JAPAN.</p>
                    <p>2. <input type="text" name="grammar42-2" required/> ROBERTA <input type="text" name="grammar42-3" required/> (HELP) YOU WITH THE EXERCISE?</p>
                    <p>3. JOHN <input type="text" name="grammar42-4" required/>  (BE) HERE IN 10 MINUTES.</p>
                    <p>4. THEY <input type="text" name="grammar42-5" required/> (NOT GO) TO THE PARTY.</p>
                    <p>5. <input type="text" name="grammar42-6" required/> HE <input type="text" name="grammar26-4" required/> (CALL) ME TOMORROW.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="15">
                    <input type="hidden" name="atividade_id" value="42">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">B - Use Will Or Going To To Complete The Sentences.</h5>
				<form id="unidade15grammar43" method="post">
                    <p>1. THE GAME <input type="text" name="grammar43-1" required/> (BE) GREAT!</p>
                    <p>2. I PLANNED A PARTY FOR MY BIRTHDAY. I <input type="text" name="grammar43-2" required/> (TRAVEL) TO VISIT MY OLD FRIENDS IN THE UNITED STATES.</p>
                    <p>3. SHE <input type="text" name="grammar43-3" required/>  (MAKE) A GREAT WEB DESIGNER.</p>
                    <p>4. WE <input type="text" name="grammar43-4" required/>  (BE) LATE. WE NEED TO GO NOW.</p>
                    <p>5. YOU <input type="text" name="grammar43-5" required/> (NEED) TO STUDY A LOT TO PASS THE TEST.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="15">
                    <input type="hidden" name="atividade_id" value="43">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade15grammar42").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar42 input[type="text"]').each(function(index){
                if(($('#unidade15grammar42 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar42 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar42'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar42'), respostas);
            }
        });

        $("#unidade15grammar43").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade15grammar43 input[type="text"]').each(function(index){
                if(($('#unidade15grammar43 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade15grammar43 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade15grammar43'), respostas);
            }else{
                enviarAtividade($('#unidade15grammar43'), respostas);
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
                        $('#unidade15grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade15grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade15grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade15grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
