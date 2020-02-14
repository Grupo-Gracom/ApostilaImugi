@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade13" data-etapa="grammar">
				<h3 class="barlow">UNIT 13 - LAYER STYLE</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit13/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                <ul>
                   <p><b>SIMPLE PAST (REGULAR VERBS)</b></p>
                   <p>THE SIMPLE PAST IS USED TO TALK ABOUT AN ISOLATED ACTION IN THE PAST.</p>
                   <p>STRUCTURE</p>
                   <p><b>(AFFIRMATIVE):</b>  SUBJECT + VERB – ED</p>
                   <p>EXAMPLE: I CREATED A CUSTOM FONT</p>
                   <p><b>(INTERROGATIVE):</b> DID + SUBJECT + VERB</p>
                   <p>EXAMPLE: DID YOU CREATE A CUSTOM FONT?</p>
                   <p><b>(NEGATIVE):</b>  SUBJECT + DID + NOT + VERB</p>
                   <p>EXAMPLE: I DIDN’T CREATE A CUSTOM FONT.</p>
                </ul>
                </div>
                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Change The Sentences To The Other Two Forms Not Given.</h5>
				<form id="unidade13grammar37" method="post">
                    <p> 
                        <p>1. <b>AFFIRMATIVE:</b></p>
                        <p class="upper">She Worked Yesterday.</p>
                        <div class="metade">
                            <p>
                                <b>INTERROGATIVE:</b>
                                <input type="text" name="grammar37-1" class="left-align full" required/>
                            </p>
                            <p>
                                <b>NEGATIVE:</b>
                                <input type="text" name="grammar37-2" class="left-align full" required/>
                            </p>
                        </div>
                    </p>

                    <p style="margin-top: 36px"> 
                        <div class="metade">
                            <p>
                                2. <b>AFFIRMATIVE:</b> 
                                <input type="text" name="grammar37-3" class="left-align full"  required/>
                            </p>
                        </div>
                        <p><b>INTERROGATIVE:</b></p>
                        <p class="upper">Did You Call Me?</p>
                        <div class="metade">
                            <p>
                                <b>NEGATIVE:</b> 
                                <input type="text" name="grammar37-4" class="left-align full"  required/>
                            </p>
                        </div>
                    </p>

                    <p style="margin-top: 36px"> 
                        <div class="metade">
                            <p>
                                3. <b>AFFIRMATIVE:</b> 
                                <p><input type="text" name="grammar37-5" class="left-align full" required/></p>
                            </p>
                            <p>
                                <b>INTERROGATIVE:</b> 
                                <p><input type="text" name="grammar37-6" class="left-align full" required/></p>
                            </p>
                        </div>
                        <p><b>NEGATIVE:</b></p>
                        <p class="upper">We Didn’t Listen To The Teacher.</p>
                    </p>

                    <p style="margin-top: 36px"> 
                            <p>
                                4. <b>AFFIRMATIVE:</b> 
                                <p class="upper">They Used Photoshop To Make The Banner.</p>
                            </p>
                        <div class="metade">
                            <p>
                                <b>INTERROGATIVE:</b> 
                                <p><input type="text" name="grammar37-7" class="left-align full" required/></p>
                            </p>
                        </div>
                        <div class="metade">
                            <p><b>NEGATIVE:</b></p>
                            <p><input type="text" name="grammar37-8" class="left-align full" required/></p>
                        </div>
                    </p>

                    <p style="margin-top: 36px"> 
                        <div class="metade">
                            <p>
                                5. <b>AFFIRMATIVE:</b> 
                                <p><input type="text" name="grammar37-9" class="left-align full" required/></p>
                            </p>
                        </div>
                            <p>
                                <b>INTERROGATIVE:</b> 
                                <p class="upper">Did You Need Help With The Editing?</p>
                            </p>
                        <div class="metade">
                            <p><b>NEGATIVE:</b></p>
                            <p><input type="text" name="grammar37-10" class="left-align full" required/></p>
                        </div>
                    </p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="13">
                    <input type="hidden" name="atividade_id" value="37">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
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

        $("#unidade13grammar37").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade13grammar37 input[type="text"]').each(function(index){
                if(($('#unidade13grammar37 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade13grammar37 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade13grammar37'), respostas);
            }else{
                enviarAtividade($('#unidade13grammar37'), respostas);
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
                        $('#unidade13grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade13grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade13grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade13grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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