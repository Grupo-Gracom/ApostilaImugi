@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade28" data-etapa="grammar">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit28/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                    <p><b>Object Pronouns X Subject Pronouns</b></p>
                    <p>Object Pronouns Are Used After Verbs And Prepositions. The Object Receives The Action, While The Subject Executes The Action.</p>
                    <p>
                        <div class="umterco">
                            <ul>
                                <p><b>SUBJECT PRONOUNS</b></p>
                                <p>I</p>
                                <p>YOU</p>
                                <p>WE</p>
                                <p>THEY</p>
                                <p>HE</p>
                                <p>SHE</p>
                                <p>IT</p>
                            </ul>
                        </div>
                        <div class="umterco">
                            <ul>
                                <p><b>OBJECT PRONOUNS</b></p>
                                <p>ME</p>
                                <p>YOU</p>
                                <p>US</p>
                                <p>THEM</p>
                                <p>HIM</p>
                                <p>HER</p>
                                <p>IT</p>
                            </ul>
                        </div>
                    </p>
                </div>
                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete The Sentences Using Subject Pronouns Or Object Pronouns.</h5>
				<form id="unidade28grammar71" method="post">
                    <p>1. She Loves <input type="text" name="grammar71-1" required/>  (He/Him).</p>
                            <p>2. Give This To <input type="text" name="grammar71-2" required/> (She/Her).</p>
                            <p>3. I Have Something For <input type="text" name="grammar71-3" required/>  (They/Them).</p>
                            <p>4. Do You Need <input type="text" name="grammar71-4" required/> (I/Me)?</p>
                            <p>5. Talk To <input type="text" name="grammar71-5" required/> (We/Us).</p>
                    </p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="28">
                    <input type="hidden" name="atividade_id" value="71">
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

        $("#unidade28grammar71").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade28grammar71 input[type="text"]').each(function(index){
                if(($('#unidade28grammar71 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade28grammar71 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade28grammar71'), respostas);
            }else{
                enviarAtividade($('#unidade28grammar71'), respostas);
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
                        $('#unidade28grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade28grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade28grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade28grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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