@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="grammar">
				<h3 class="barlow">UNIT 44</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>                
                <h5 class="barlow" style="margin-top:16px;">CONJUNCTIONS FOR CONTRASTING INFORMATION.</h5>
                <p>We use <B>contrasting connectors,</B> to connect sentences expressing the idea of contrast.</p>
                <div class="espacamento">
                    <table class="bordered">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Contrasting information</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>But , however, yet, though , although, even though, despite,
                            despite the fact, in spite of, on the other hand, on the other side,</p></td>                                                         														
                        </tr>                                                                             										
                    </table>                 
                </div>
                <div class="clear"></div>               
                <div class="espacamento">                                
                    <table class="bordered esquerda">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Sentences / information</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>a.Cinema 4D is a <b>fast</b> software.</p></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>b.it's <b>very difficult</b> to learn and memorize all the tools</p></td>                                                         														
                        </tr>                                                                                                                  										
                    </table>                 
                </div>
                <div class="espacamento">                                
                    <table id="encostado" class="bordered direita">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Connected sentences / information</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>a+b</p></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D is a fast software <b>but</b> it's very dificult to</p></td>                                                         														
                        </tr>                                                                                                                      										
                    </table>                 
                </div>
                <div class="espacamento">                                
                    <table class="bordered direita">                                                                                                 										
                        <tr>
                            <td class="center-align bordered"><p><b>l</b>earn and memorize its too<b>l</b>s</p></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D is a fast software <b>However/even though,</b> it's very dificult to
                            learn and memorize a<b>ll</b> the too<b>l</b>s.</p></td>                                                         														
                        </tr>                                                                                                                      										
                        <tr>
                            <td class="center-align bordered"><p><b>Although</b> Cinema 4D is a fast software, it's very dificult to learn
                            and memorize a<b>ll</b> the too<b>l</b>s.</p></td>                                                         														
                        </tr>                                                                                                                      										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D is a fast software. it's very dificult to learn and memorize a<b>ll</b> the too<b>l</b>s <b>though.</b></p></td>                                                         														
                        </tr>                                                                                                                      										
                    </table>                 
                </div>
                <div class="clear"></div>               
                <h5 class="barlow">EXERCISES</h5>                
                <h5 class="barlow">A - Rephrase thesentences beginning with the words in brackets:</h5>                              
				<form class="quasefull" id="unidade44grammar313" method="post">
                    <p>
                        1 - She has plenty of money, but she is very mean. <b>(although)</b>                        
                        <input type="text" placeholder="responda aqui !" name="grammar313-1" class="full left-align" required>
                    </p>
                    <p>
                        2 - They have a car, but they rarely use it. <b>(though)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar313-2" class="full left-align" required>
                    </p>
                    <p>
                        3 - He was innocent, but he was sent to prison. <b>(although)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar313-3" class="full left-align" required>
                    </p>
                    <p>
                        4 - He was a number of relatives living nearby, but he never visits them. <b>(even though)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar313-4" class="full left-align" required>
                    </p>
                    <p>
                        5 - She never takes any kind of exercise, but she is quite fit and healthy. <b>(even though)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar313-5" class="full left-align" required>
                    </p>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="44">
                    <input type="hidden" name="atividade_id" value="313">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
                <h5 class="barlow">B - Rephrase the sentences using the words in brackets and a noun:</h5>
				<form class="quasefull" id="unidade44grammar314" method="post">                                                                                                                   
                    <p>
                        1 - They went out for a walk, even though the weather was bad. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-1" class="full left-align" required>
                    </p>
                    <p>
                        2 - She managed to write, even though her hand was injured. <b>(in spite of)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-2" class="full left-align" required>
                    </p>
                    <p>
                        3 - All the trains were on time, even though the snow was heavy. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-3" class="full left-align" required>
                    </p>
                    <p>
                        4 - Our coach didn’t arrive late, even though the traffic was terrible. <b>(in spite of)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-4" class="full left-align" required>
                    </p>
                    <p>
                        5 - A lot of people buy those houses, even though the prices are high. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-5" class="full left-align" required>
                    </p>
                    <p>
                        6 - He stayed up late, even though he was very tired. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-6" class="full left-align" required>
                    </p>
                    <p>
                        7 - I didn’t buy the car, even though I had the money. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-7" class="full left-align" required>
                    </p>
                    <p>
                        8 - He stayed outside in the cold weather, even though he felt ill. <b>(despite)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-8" class="full left-align" required>
                    </p>
                    <p>
                        9 -  People continue to smoke, even though they know the dangers. <b>(in spite of)</b>
                        <input type="text" placeholder="responda aqui !" name="grammar314-9" class="full left-align" required>
                    </p>                                                          
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="44">
                    <input type="hidden" name="atividade_id" value="314">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px;">C - Rewrite the following sentences beginning them with the given words:</h5>    
                <form id="unidade44grammar315" method="post">
                    <p>1. He worked hard, but he couldn’t pass the test.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-1" class="quasefull left-align" required></p>
                    <p>2. It was late, but we decided to go out.</p>
                    <p>Although <input type="text" placeholder="responda aqui !" name="grammar315-2" class="quasefull left-align" required></p>
                    <p>3. She is rich, but she is not happy.</p>
                    <p>Despite <input type="text" placeholder="responda aqui !" name="grammar315-3" class="quasefull left-align" required></p>
                    <p>4. She had a bad teacher. Still, she passed her exams.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-4" class="quasefull left-align" required></p>
                    <p>5. She lives next door but we rarely see each other.</p>
                    <p>Although <input type="text" placeholder="responda aqui !" name="grammar315-5" class="quasefull left-align" required></p>
                    <p>6. He faced many setbacks, but he didn’t lose hope.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-6" class="quasefull left-align" required></p>
                    <p>7. Although she is a foreigner, she speaks English remarkably well.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-7" class="quasefull left-align" required></p>
                    <p>8. In spite of earning a good salary, she finds it difficult to make both ends meet.</p>
                    <p>Although <input type="text" placeholder="responda aqui !" name="grammar315-8" class="quasefull left-align" required></p>
                    <p>9. She lives close to her office; however, she is always late for work.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-9" class="quasefull left-align" required></p>
                    <p>10. Although she works three jobs in a day, she makes it a point to spend quality time with her kids.</p>
                    <p>In spite of <input type="text" placeholder="responda aqui !" name="grammar315-10" class="quasefull left-align" required></p>                                        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="44">
                    <input type="hidden" name="atividade_id" value="315">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px;">D -  Prepare a presentation about positive and negative aspects of use of internet by children
                and teenagers. Use the linking words for contrasting your ideas. Be prepared to come up
                with ideas on how to use internet effectively</h5>    
                <form id="unidade44grammar316" method="post">
                    <textarea name="grammar316-1" class="center-align" placeholder="Responda aqui" required></textarea>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="44">
                    <input type="hidden" name="atividade_id" value="316">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                                              
                <div class="clear"></div>        
                <figure>
					<img src="{{ asset('assets/img/dominating/unit44/grammar.png') }}" alt="Garotos festejando">
				</figure>                      
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade44grammar313").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade44grammar313 input[type="text"]').each(function(index){
                if(($('#unidade44grammar313 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade44grammar313 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade44grammar313'), respostas);
            }else{
                enviarAtividade($('#unidade44grammar313'), respostas);
            }
        });

        $("#unidade44grammar314").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade44grammar314 input[type="text"]').each(function(index){
                if(($('#unidade44grammar314 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade44grammar314 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade44grammar314'), respostas);
            }else{
                enviarAtividade($('#unidade44grammar314'), respostas);
            }
        });

        $("#unidade44grammar315").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade44grammar315 input[type="text"]').each(function(index){
                if(($('#unidade44grammar315 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade44grammar315 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade44grammar315'), respostas);
            }else{
                enviarAtividade($('#unidade44grammar315'), respostas);
            }
        });

        $("#unidade44grammar316").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade44grammar316 textarea').attr("name")+'":"'+$('#unidade44grammar316 textarea').val()+'"}';
            if($('#unidade44grammar316 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade44grammar316'), respostas);
            }else{
                enviarAtividade($('#unidade44grammar316'), respostas);
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
                        $('#unidade44grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade44grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade44grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade44grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade44grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade44grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                    
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