@extends('layouts.template')
@section('titulo','Unit 3 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade3" data-etapa="grammar">
				<h3 class="barlow">UNIT 3</h3>
				<h5 class="barlow">3 – GRAMMAR</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px">A - SIMPLE PRESENT</h5>
                <p>Simple present refers to <b>facts</b> or <b>repeated actions </b>in the present.</p>

                <table class="metade center-align">
                    <tr>
                        <td colspan="2" class="barlow"><p>HE – SHE – IT (3rd person)(+)</p></td>
                    </tr>
                    <tr>
                        <td><p>Works</p></td>
                        <td><p>Reads</p></td>
                    </tr>
                    <tr>
                        <td><p>Goes</p></td>
                        <td><p>Fixes</p></td>
                    </tr>
                    <tr>
                        <td><p>Plays</p></td>
                        <td><p>Studies</p></td>
                    </tr>
                    <tr>
                        <td><p>Washes</p></td>
                        <td><p>Watches</p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="barlow"><p>HAS</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>For (-) and (?) use DOES.</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>(+) She studies Vusual Art.</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>(?) Does she study Visual Art?</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>(-) She does not study Visual Art.</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>*does + not = doesn’t</p></td>
                    </tr>
                </table>

                <p><b>Verbs ended in: General letters</b> = verb <b>+ (s)</b></p>
                <p><b>S,SH,CH,X,Z,O</b> = verb <b>+ (es)</b></p>
                <p><b>Vowel + Y</b> = verb <b>+ (s)</b></p>
                <p><b>Consonant + Y</b> = verb <b>+ (ies)</b></p>

                <h5 class="barlow" style="margin-top: 16px">B - WH QUESTIONS – WHEN – WHY – WHICH.</h5>

                <p><b>When</b> – Used for <b>questions about time.</b></p>

                <p><b>Examples:</b></p>
                <p><b>When</b> is your <b>birthday?</b> / My birthday is <b>in March 31st</b></p>
                <p><b>When</b> do you like to travel? / I like to travel <b>in the summer.</b></p>
                <p><b>Why</b> – Used for <b>questions about reason.</b></p>

                <p><b>Examples:</b></p>
                <p><b>Why</b> does she play L.O.L.? / <b>Because</b> she likes the graphics.</p>
                <p><b>Why</b> are you anxious? / <b>Because</b> I have many things to study.</p>
                <p><b>Which</b> – Used for <b>questions about choices/options.</b></p>

                <p><b>Examples:</b></p>
                <p>Which color do they prefer? / They prefer black</p>
                <p><b>Black or white?</b></p>
                <p><b>Which</b> program is better? / In my opinion, Java is better. </p>
                <p><b>Java or Python?</b></p>

                <h5 class="barlow" style="margin-top: 16px">C - ARTICLES</h5>

                <table class="metade center-align">
                    <tr>
                        <td></td>
                        <td class="barlow"><p>BEFORE VOWEL SOUND</p></td>
                        <td class="barlow"><p>BEFORE VOWEL SOUND</p></td>
                    </tr>
                    <tr>
                        <td class="barlow"><p>SINGULAR</p></td>
                        <td><p>An</p></td>
                        <td><p>A</p></td>
                    </tr>
                    <tr>
                        <td class="barlow"><p>PLURAL</p></td>
                        <td colspan="2"><p>The</p></td>
                    </tr>
                </table>

                <p><b>Examples:</b></p>

                <table class="umterco center-align">
                    <tr>
                        <td><p>an actor</p></td>
                        <td><p>a doctor</p></td>
                    </tr>
                    <tr>
                        <td><p>an artist</p></td>
                        <td><p>a web designer</p></td>
                    </tr>
                    <tr>
                        <td><p>an illustrator</p></td>
                        <td><p>a photographer</p></td>
                    </tr>
                    <tr>
                        <td><p>the article</p></td>
                        <td><p>the magazines</p></td>
                    </tr>
                    <tr>
                        <td><p>the eraser</p></td>
                        <td><p>the brushes</p></td>
                    </tr>
                    <tr>
                        <td><p>the user</p></td>
                        <td><p>the workshops</p></td>
                    </tr>
                </table>

                <div class="clear"></div>

                <p><b>EXCERCISES</b></p>

                <p class="barlow">1) Fill in the chart for yourself. Then look at the example. Choose and write 8 sentences from the chart:</p>

                <p class="center-align metade">Adverbs of frequency</p>
                <table class="metade center-align barlow">
                    <tr>
                        <td></td>
                        <td class="barlow" colspan="2"><p>Monday</p></td>
                        <td class="barlow" colspan="2"><p>Tuesday</p></td>
                        <td class="barlow" colspan="2"><p>Wednesday</p></td>
                        <td class="barlow" colspan="2"><p>Thursday</p></td>
                        <td class="barlow" colspan="2"><p>Friday</p></td>
                    </tr>
                    <tr>
                        <td lass="barlow"><p>ACTIONS</p></td>
                        <td><p>Tom</p></td>
                        <td><p>You</p></td>
                        <td><p>Tom</p></td>
                        <td><p>You</p></td>
                        <td><p>Tom</p></td>
                        <td><p>You</p></td>
                        <td><p>Tom</p></td>
                        <td><p>You</p></td>
                        <td><p>Tom</p></td>
                        <td><p>You</p></td>
                    </tr>
                    <tr>
                        <td><p>Watch anime</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>Read Comic Books</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>Play video games</p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>Study new tool</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                    </tr>
                    <tr>
                        <td><p>Draw</p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>Have English classes</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                    </tr>
                    <tr>
                        <td><p>Listen to music</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                    <tr>
                        <td><p>Go to workshops</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p>*</p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                </table>

                <p><b>Examples: Tom Plays video game on Mondays.</b></p>

                <form id="unidade3grammar113" action="post" class="metade">
                    <p>1.<input type="text" name="grammar113-1" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>2.<input type="text" name="grammar113-2" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>3.<input type="text" name="grammar113-3" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>4.<input type="text" name="grammar113-4" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>5.<input type="text" name="grammar113-5" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>6.<input type="text" name="grammar113-6" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>7.<input type="text" name="grammar113-7" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>8.<input type="text" name="grammar113-8" placeholder="Responda aqui" class="full left-align" required></p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="113">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

               <div class="clear"></div>

               <p class="barlow">2) Write the sentences from the previous exercise in negative and interrogative forms.</p>

               <form id="unidade3grammar114" action="post" class="metade">
                    <p>1.
                        <input type="text" name="grammar114-1" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-2" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>2.
                        <input type="text" name="grammar114-3" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-4" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>3.
                        <input type="text" name="grammar114-5" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-6" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>4.
                        <input type="text" name="grammar114-7" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-8" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>5.
                        <input type="text" name="grammar114-9" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-10" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>6.
                        <input type="text" name="grammar114-11" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-12" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>7.
                        <input type="text" name="grammar114-13" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-14" placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>
                    <p>8.
                        <input type="text" name="grammar114-15" placeholder="Responda aqui" class="full left-align" required>(-)
                        <input type="text" name="grammar114-16"  placeholder="Responda aqui" class="full left-align" required>(?)
                    </p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="114">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
               </form>

               <div class="clear"></div>

                <p class="barlow">3) Build up questions with WHEN, WHY AND WICH for the answers.</p>
                <p>E.g We go to L.A next week. / <b>When</b> do you go to L.A.?</p>

                <form id="unidade3grammar115" class="metade" action="post">
                    <p>1. Her birthday is in May.<input type="text" name="grammar115-1" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>2. I have classes on Saturdays.<input type="text" name="grammar115-2" placeholder="Responda aqui" class="full left-align" required></p>
                    <p>3. They like to play BF4<input type="text" name="grammar115-3" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>4. Because python is better to program.<input type="text" name="grammar115-4" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>5. She arrives tomorrow morning.<input type="text" name="grammar115-5" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>6. Because I need for my career<input type="text" name="grammar115-6" class="full left-align" placeholder="Responda aqui" required></p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="3">
                    <input type="hidden" name="atividade_id" value="115">
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

        $("#unidade3grammar113").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3grammar113 input[type="text"]').each(function(index){
                if(($('#unidade3grammar113 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3grammar113 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar113'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar113'), respostas);
            }
        });

        $("#unidade3grammar114").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3grammar114 input[type="text"]').each(function(index){
                if(($('#unidade3grammar114 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3grammar114 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar114'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar114'), respostas);
            }
        });

        $("#unidade3grammar115").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3grammar115 input[type="text"]').each(function(index){
                if(($('#unidade3grammar115 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3grammar115 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3grammar115'), respostas);
            }else{
                enviarAtividade($('#unidade3grammar115'), respostas);
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
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade3grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade3grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
