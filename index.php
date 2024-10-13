<?php
    session_start();
    if(isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D & R</title>
    <link rel="stylesheet" href="estilos/style.css">
    <script type="text/javascript">  
    
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('cont').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'app/cont_regr/contagem.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000); 
	</script>
</head>
<body onload="ajax();">
    <header>
        <h1>Danielly & Rykelmy</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="#local">Local e Hora</a>
            <a href="app/pesquisa_convidado.php">Confirmar Presença</a>
            <a href="#msg" id="bl_msg">Mensagem para os noivos</a>
        </nav>
    </header>
    <main>
        <p style="color: green; margin: 15px"><?php if(isset($mensagem)) { echo $mensagem; } ?></p>
        <section class="texto">
            <h2>Nossa História</h2>
            <article id="n-hist">
                <div id="texto01">
                    <p>
                        <img id="img01-texto" style='width=auto; height=auto' src="imagens/img01a.jpeg">
                        <a id="espaco">///</a>Bom, está história poderia começar com um Era uma Vez... Mas vamos fugir um pouco ao clichê, Deus alinhou tudo em nossas vidas, planejou detalhe por detalhe e no fim aqui estamos nós prestes a comemorar este momento mais que especial.
                        
                        <br> 
                        <a id="espaco">///</a>Bom caros leitores nossa história começa com um encontro, isso mesmo, um encontro entre Danielly Neris Morais da Silva, que ainda nem tinha nascido, e Rykelmy Barbosa Lima Ferreira que mal completara um mês de vida, o que aconteceu foi que Fernanda Neris, mãe da ainda não nascida Danielly, foi visitar Carla Ferreira que tinha acabado de ganhar seu primeiro filho chamado Rykelmy.
                    </p>
                </div>
                
                
                <div>
                    
                    <p id="texto02">
                        <img id="img02-texto" src="imagens/img02a.jpeg">
                        <a id="espaco">///</a>Depois desse primeiro encontro os dois pombinhos foram crescendo, estudaram juntos, se viram na igreja e foram aos poucos criando um sentimento um pelo outro. Após alguns acontecimentos, Rykelmy acabou se mudando e eles perderam o contato por um tempo, se vendo apenas de vez em quando na igreja, mas, eis que uns meses antes de Daniely completar 15 anos de idade surge um interesse, o nada bobo Rykelmy viu a agora linda moça Danielly e se apaixonou, mandou mensagem e após muitas conversas o amor um pelo outro foi crescendo e eis que chega o mês de fevereiro, onde Danielly iria completar 15 anos e com isso ele acabou sendo o príncipe dela em seu aniversário.<br>
                        <img id="img03-texto" src="imagens/img03a.jpeg">
                        <a id="espaco">///</a>Após o aniversário de 15 muitas coisas aconteceram, ele errou, se afastou dela, magoou ela, mas Deus ainda não tinha dado um ponto final a essa história de amor, e após 2 anos Deus abriu os caminhos, mexeu nos corações e ele tomou coragem de falar com ela de novo, ela o perdoou, eles passaram a se falar bastante, o interesse foi crescendo cada vez mais e ele não aguentava mais esperar, queria dar logo o próximo passo, com isso eles decidiram buscar a confirmação de Deus, a palavra, assim Deus falou no coração deles, confirmou essa união com a promessa que dela faria uma porta aberta que nada nem ninguém poderia fechar.<br>
                        <a id="espaco">///</a>Depois disso as coisas continuaram caminhando, eles foram se conhecendo mais e mais, se amando mais e mais e agora aqui estamos, prestes a dar o próximo passo nessa linda história de amor
                   </p>
                   
                </div>
            </article>
        </section>
        <section class="imagem" id="imagem1">
            <p id="dizeres">"E disse: Portanto deixará o homem pai e mãe, e se unirá a sua mulher, e serão dois numa só carne"<br>
            "Assim não são mais dois mas uma só carne. Portanto o que Deus ajuntou não o separa o homem"<br>
            Mateus 19:5-6<br><br>
            "Ora, a fé é o firme fundamento das coisas que se esperam, e a prova das coisas que não se vêem"<br>
            Hebreus 11:1</p>
        </section>
        <section id="local">
            <h2>Local e Horário</h2>
            <img src="imagens/esp-paraiso.jpeg" id="imglc" alt="salão paraíso">
            <a href="https://www.chacaraparaisojundiai.com.br/salao-paraiso" id="link-paraiso" target="_blank"><img src="imagens/site-icone.png" alt="imagem de link" ></a>
            <a href="https://www.facebook.com/chacaraparaisojundiaii/" id="link-paraiso" target="_blank"><img src="imagens/face-paraiso.png" alt="logo facebook" ></a>
            <a href="https://www.instagram.com/chacaraparaiso1506/" id="link-paraiso" target="_blank"><img src="imagens/insta-paraiso.png" alt="logo instagram" ></a>
            <a href="https://br.pinterest.com/chacaraparaiso1506/_created/" id="link-paraiso" target="_blank"><img src="imagens/pinter-paraiso.png" alt="logo pinterest" ></a>
            <div id="ender">
                <p>R. Lindório Rocha, 1700 
                    Chácara Santa Martha <br> Várzea Paulista - SP</p>
            </div>
            
            <a href="https://maps.app.goo.gl/PKUXDMdMBDXvpgnZ9" id="logo-maps" target="_blank"><img src="imagens/logo-maps.png" alt="logo maps"></a>
            <a href="https://ul.waze.com/ul?preview_venue_id=205260320.2052603201.22229467&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" id="logo-waze" target="_blank"><img src="imagens/logo-waze.png" alt="logo waze"></a>
            <div id="hora">
                <p>Data: 22/12/2024 <br>
                Horário: 17:00Hrs</p>
            </div>
            <div id="cont">
 
			</div>
        </section>
        <section class="imagem" id="imagem2">
            <p id="dizeres">"E ao anjo da igreja que está em Filadélfia escreve: Isto diz o que é santo, o que é verdadeiro, o que tem a chave de Davi; o que abre, e ninguém fecha; e fecha, e ninguém abre:"<br>
            "Eu sei as tuas obras: eis que diante de ti pus uma porta aberta, e ninguém a pode fechar: tendo pouca força, guardaste a minha palavra, e não negaste o meu nome"
            <br>Apocalipse 3:7-8</p>
        </section>
        <section id="msg">
            <h2>Deixe uma mensagem para os noivos</h2>
            <form id='form-msgs' action="app/mensagem.php" method="post">
                <p id="form-nome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required placeholder="Seu Nome">
                </p>

                <p id="form-msg">
                    <label for="imsg">Mensagem</label><br>
                    <textarea name="msg" id="imsg" cols="30" rows="10" required placeholder="Digite aqui sua mensagem"></textarea>
                </p>
                <p id="form-enviar">
                    <input type="submit" value="Enviar">
                </p>
            </form>
        </section>
    </main>
    <script>

        let userAgentString = navigator.userAgent;

        let chromeAgent = userAgentString.indexOf("Chrome") > -1;
        let safariAgent = userAgentString.indexOf("Safari") > -1;
        //let firefoxAgent = userAgentString.indexOf("Firefox") > -1;
        //let operaAgent = userAgentString.indexOf("OP") > -1;
        if ((chromeAgent) && (safariAgent)) {
                safariAgent = false;
            }
        //if ((chromeAgent) && (operaAgent)) {
        //   chromeAgent = false
        //}
        if (safariAgent == true) {
            imagem1.style.background = 'linear-gradient(to bottom, var(--cor3), var(--cor5))';
            imagem2.style.background = 'linear-gradient(to bottom, var(--cor3), var(--cor5))';
        } 
    </script>
</body>
</html>