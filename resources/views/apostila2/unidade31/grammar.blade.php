@extends('layouts.template')
@section('titulo','Unit 31 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="grammar">
				<h3 class="barlow">UNIT 31</h3>
				<h5 class="barlow">3 – GRAMMAR</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>     
                
                <h5 class="barlow" style="margin-top: 16px">A - WOULD RATHER X TO PREFER</h5>

                <table class="metade center-align">
                    <tr>
                        <td><p>WOULD RATHER</p></td>                        
                    </tr>
                    <tr>
                        <td><p>(+) I would rather live in New York than in San Francisco.</b></td>
                    </tr>
                    <tr>
                        <td><p>(-) I would rather not live in new York.</b></td>
                    </tr> 
                    <tr>
                        <td><p>(?) Would you rather live in New York or in San Francisco?</b></td>
                    </tr>     
                    <tr>
                        <td><p>TO PREFER TO</p></td>                        
                    </tr>
                    <tr>
                        <td><p>(+) I prefer to live in New York.</b></td>
                    </tr>
                    <tr>
                        <td><p>(-) I don’t prefer to live in new York.</b></td>
                    </tr> 
                    <tr>
                        <td><p>(?) Do you prefer to live in New York or in San Francisco?</b></td>
                    </tr>                    
                </table>

                <p class="barlow">1) Rewrite these sentences using “WOULD YOU RATHER”</p>
                <form id="unidade31grammar243" class="metade" action="post">
                    
                    <p>
                        1. I’ve had bad experiences with Western doctors, so I decided to go to a Chinese doctor.
                        <input type="text" name="grammar243-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        2. For summer vacation, I want to stay home rather than going on a trip.
                        <input type="text" name="grammar243-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        3. Marsha grew up on a farm, so she wants to live in the country instead of a city.
                        <input type="text" name="grammar243-3" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        4. I don’t want a dog for a pet. I want a cat instead.
                        <input type="text" name="grammar243-4" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        5. English is so hard! I want to study Chinese instead!
                        <input type="text" name="grammar243-5" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        6. Jim likes to cook at home rather than spending money at a restaurant.
                        <input type="text" name="grammar243-6" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        7. I have to choose an after-school activity. Many of my friends chose to play football,
                        but I don’t like football, so I think I will play basketball instead.
                        <input type="text" name="grammar243-7" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    
                    <div class="clear"></div> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="243">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <p class="barlow">2) Now write two of your own sentences, using “WOULD RATHER”</p>
                <form id="unidade31grammar244" class="metade" action="post">
                    
                    <p>
                        1.<input type="text" name="grammar244-1" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    <p>
                        2.<input type="text" name="grammar244-2" placeholder="Responda aqui" class="full left-align" required>
                    </p>
                    
                    <div class="clear"></div> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="244">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                 <p class="barlow">3) select the appropriate words to complete the sentences.</p>
				<form id="unidade31grammar245" method="post">
                    <p>1. She prefers juice (
                        <input type="radio" name="grammar-245-1" value="1" required><b>to</b> / 
                        <input type="radio" name="grammar-245-1" value="2" required><b>than</b> / 
                        <input type="radio" name="grammar-245-1" value="3" required><b>from</b>
                        ) soda.</p>
                    <p>2. Sarah would rather have lunch on the deck but john prefers (
                        <input type="radio" name="grammar-245-2" value="1" required><b>te eat</b> / 
                        <input type="radio" name="grammar-245-2" value="2" required><b>eating</b> / 
                        <input type="radio" name="grammar-245-2" value="3" required><b>eat</b>
                        ) in the kitchen.</p>
                    <p>3. I prefer planes (
                        <input type="radio" name="grammar-245-3" value="1" required><b>than</b> / 
                        <input type="radio" name="grammar-245-3" value="2" required><b>to</b> / 
                        <input type="radio" name="grammar-245-3" value="3" required><b>for</b>) boats.</p>
                    <p>4. I don’t like the theater. I’d rather (
                        <input type="radio" name="grammar-245-4" value="1" required><b>to go</b> / 
                        <input type="radio" name="grammar-245-4" value="2" required><b>go</b> / 
                        <input type="radio" name="grammar-245-4" value="3" required><b>going</b>) to a concert.</p>
                    <p>5. I’m not very keen on computers. I prefer (
                        <input type="radio" name="grammar-245-5" value="1" required><b>writing</b> / 
                        <input type="radio" name="grammar-245-5" value="2" required><b>to write</b>) by hand.</p>
                    <p>6. I’d rather to speak to her in person (
                        <input type="radio" name="grammar-245-6" value="1" required><b>to talk</b> / 
                        <input type="radio" name="grammar-245-6" value="2" required><b>to talking</b> / 
                        <input type="radio" name="grammar-245-6" value="3" required><b>than talk</b>) to her over the phone.</p>
                    <p>7. I love reading books, but I prefer (
                        <input type="radio" name="grammar-245-7" value="1" required><b>watching</b> / 
                        <input type="radio" name="grammar-245-7" value="2" required><b>to watch</b>) TV.</p>
                    <p>8. She prefers studying lessons (
                        <input type="radio" name="grammar-245-8" value="1" required><b>to do</b> / 
                        <input type="radio" name="grammar-245-8" value="2" required><b>to doing</b>) school projects.</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="245">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <p class="barlow">4) You are in doubt about what software to use to prepare a short animation. Think of two
                    or three different programs and debate with a friend your preferences . Use WOULD RATHER and PREFER TO.</p>
                <form id="unidade31grammar246" class="metade" action="post">
                    
                <textarea name="grammar246-1" placeholder="Responda aqui" cols="1" rows="6"></textarea>
                <div class="clear"></div>                    
                    <div class="clear"></div> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="31">
                    <input type="hidden" name="atividade_id" value="246">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            var inputType = $(this).find('input').attr('type');
            checkAtividade(atividade_id, inputType);
        });

        $("#unidade31grammar243").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade31grammar243 input[type="text"]').each(function(index){
                if(($('#unidade31grammar243 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade31grammar243 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31grammar243'), respostas);
            }else{
                enviarAtividade($('#unidade31grammar243'), respostas);
            }
        });

        $("#unidade31grammar244").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade31grammar244 input[type="text"]').each(function(index){
                if(($('#unidade31grammar244 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade31grammar244 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31grammar244'), respostas);
            }else{
                enviarAtividade($('#unidade31grammar244'), respostas);
            }
        });

        $("#unidade31grammar245").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade31grammar245 input[type="radio"]:checked').each(function(index){
                if(($('#unidade31grammar245 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade31grammar245 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31grammar245'), respostas);
            }else{
                enviarAtividade($('#unidade31grammar245'), respostas);
            }
        });

        $("#unidade31grammar246").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade31grammar246 textarea').attr("name")+'":"'+$('#unidade31grammar246 textarea').val()+'"}';
            if($('#unidade31grammar246 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade31grammar246'), respostas);
            }else{
                enviarAtividade($('#unidade31grammar246'), respostas);
            }
        });
       

        function checkAtividade(atividade_id, inputType){
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
                    
                    console.log('tipo input -> ' + inputType);
                    if(inputType === 'radio'){
                        for(j = 0; j < respostas.length; j++){
                            $('#unidade31grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);                    
                        }
                    }else{
                        for(j = 0; j < respostas.length; j++){
                            $('#unidade31grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                            $('#unidade31grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                            $('#unidade31grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                            $('#unidade31grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        }
                    }                    
                    $('#unidade31grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade31grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
