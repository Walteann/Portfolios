<!DOCTYPE html>
<html>
<head>
    <title>Hélio Barros</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap-css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="css/font-awesome4/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/meuEstiloCSS.css">


<script src="js/jquery3.2.1.min.js"></script>
<style>
  body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }
    
    body,
    html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }
    /* Create a Parallax Effect */
    
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* First image (Logo. Full height) */
    
    .bgimg-1 {
        background-image: url('imagens/engrenagem.jpg');
        min-height: 100%;
    }
    /* Second image (Portfolio) */
    
    .bgimg-2 {
        background-image: url("imagens/helio_bkg3.jpg");
        min-height: 400px;
    }
    /* Third image (Contact) */
    
    .bgimg-3 {
        background-image: url("imagens/calculo-temporario.jpg");
        min-height: 400px;
    }
    
    .walt-wide {
        letter-spacing: 10px;
    }
    
    .walt-hover-opacity {
        cursor: pointer;
    }
    
    

    
    fieldset{
display: flex;
text-align: center;
}
    /* Turn off parallax scrolling for tablets and phones Testa DPS*/
    
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }
</style>


<script>
    
   // $(function() {
            var nav = $('#minhaNavegacao');
            $(window).scroll(function() {
                if ($(this).scrollTop() > 150) {
                    nav.addClass("navbar-inverse");
                    nav.removeClass("navbar-default");
                } else {
                    nav.removeClass("navbar-inverse");
                    nav.addClass("navbar-default");
                }
            });
       // });
    

    jQuery(document).ready(function($){
        
        
        /* Efeito scroll suave */
        $('.scrollSuave').click(function(event){
           event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
        });
    });
    
</script>

</head>


<body>
    
    <nav id="minhaNavegacao" class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navegacao">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#minhaNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a id="logo-marca" class="navbar-brand" href="#">Hélio Barros </a><img style="margin-left: -10px;" src="imagens/Engranagem_icones.png" alt="">
        </div>
        <div class="collapse navbar-collapse" id="minhaNav">

          <ul class="nav navbar-nav navbar-right">
            <li><a class="scrollSuave" href="#sobreHelio">SOBRE MIM</a></li>
            <li><a class="scrollSuave" href="#formacaoProf">FORMAÇÃO</a></li>
            <li><a class="scrollSuave" href="#contatoComHelio">CONTATO</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 walt-display-container walt-opacity-min" id="home">
        <div class="walt-display-middle" style="white-space:nowrap;">
            <span class="walt-center walt-padding-large walt-black walt-xlarge walt-wide walt-animate-opacity">HÉLIO BARROS </span>
        </div>
        <div id="div_frase" class="walt-display-middle" style="margin-top:100px "><br>
            <p id="frase"><em>"A ciência é o querer adaptar o menor sonho ao maior."</em><br> <span class="walt-right">Fernando Pessoa</span></p></div>
    </div>

    <!-- Container (About Section) -->
    <div class="walt-content walt-container walt-padding-64" id="sobreHelio">
        <h3 class="walt-center">SOBRE MIM</h3>
        <p> Graduando em engenharia mecânica e sou mecânico de manutenção por formação. Possuo conhecimentos em Autocad, Inventor, Solidworks, Microstation e excel. Obtive meu primeiro contato com a mecânica através de uma oportunidade que alcancei em uma oficina de automoveis ainda muito jovem e a partir deste ponto a curiosidade e a motivaçao para saber mais sobre a area só cresceram e me levaram a cursar o técnico em eletromecânica e logo após a entrar na graduação..</p>
        <div class="walt-row">
            <div class="walt-col m6 walt-center walt-padding-large">
                <p><b><i class="fa fa-user walt-margin-right"></i>Hélio Barros</b></p><br>
                <img src="imagens/helio_perfil.png" class="walt-round walt-image walt-opacity walt-hover-opacity-off" alt="Photo of Me" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="walt-col m6  walt-padding-large">
                <p>Atualmente sou monitor da disciplina de resistência dos materiais na universidade em que estudo, e professor na area de exatas para cursos privados de acompanhamento escolar e pré-vestibular. Conhecer e projetar mecanismos, obter conhecimentos de geracão e transformacão de energia, ou até gerenciar um plano de manutencão e qualidade são atividades de uma grandeza considerável, meu proposito é sintetizar e transformar esses conceitos e planos de ação em um retorno de qualidade de vida melhor para a sociedade e afins.</p>
            </div>
        </div>
        <p class="walt-large walt-center walt-padding-16">Conhecimento em informática:</p>
        <div class="walt-center">
        <img src="imagens/Microsoft_Word_2013_logo.svg.png" width="50" alt="logo-word">
        <img src="imagens/excel.png" width="50" alt="logo-excel">
        <img src="imagens/powerpoint-1.png" width="50" alt="logo-powerpoint">
        <img src="imagens/autocad.png" width="50" alt="logo-autocad">
        <img src="imagens/Autodesk-Inventor-icon.png" width="50" alt="logo-inventor">
        <img src="imagens/download.png" width="50" alt="logo-microstation">
        <img src="imagens/SolidWorks-Aprenda-gratuitamente.png" width="50" alt="logo-solidWorks">
        <img src="imagens/cpp_logo.png" width="50" alt="logoc++">
        </div>
        
    </div>

    <!-- Personalidade -->
    <div class="walt-row walt-center walt-dark-grey walt-padding-16">
        <div class="walt-quarter walt-section">
            <i style="font-size: 30pt;" class="fa fa-users" aria-hidden="true"></i><br> Dinâmico
        </div>
        <div class="walt-quarter walt-section">
            <i style="font-size: 30pt;" class="material-icons">transfer_within_a_station</i><br> Pro-Ativo
        </div>
        <div class="walt-quarter walt-section">
            <i style="font-size: 30pt;" class="fa fa-handshake-o" aria-hidden="true"></i><br> Comprometido
        </div>
        <div class="walt-quarter walt-section">
            <i style="font-size: 30pt;" class="fa fa-tasks" aria-hidden="true"></i><br> Disciplinado
        </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 walt-display-container walt-opacity-min">
        <div class="walt-display-middle">
            <center><span class="walt-xxlarge walt-text-white walt-wide">FORMAÇÃO ACADÊMICA</span></center>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="walt-content walt-container walt-padding-64" id="formacaoProf">
        <h3 class="walt-center">FORMAÇÃO</h3>
        
        <div class="walt-row-padding walt-center">
           
         <div class="walt-row-padding walt-center">
         <div style="margin-bottom: 30px;">
             <img src="imagens/logoInfoPoli.png" alt="upe-logo"><br>
        <i style="font-size: 12pt; margin-right: 5px;" class="fa fa-refresh" aria-hidden="true"></i>
           Formação superior (cursando) – Bacharelado em engenharia mecânica industrial, 6º período/Noite (Escola Politécnica de Pernambuco-UPE);
            </div>
         </div>   
         
   
        <div style="margin-bottom: 30px;">
           
            <img src="imagens/senai-logo.png" alt="senai-logo"><br>
            <i style="font-size: 12pt;  margin-right: 5px;" class="fa fa-graduation-cap" aria-hidden="true"></i>
            Nível profissionalizante – Mecânico de manutenção de máquinas (Concluído em 2012, Escola técnica SENAI - Cabo)  
        </div>
        </div>   
        
        <hr>
       
       <fieldset>
           <legend style="padding: 5px"><h3 class="walt-center">EXPERIÊNCIA</h3></legend>
        <div class="walt-row-padding walt-center walt-section">
          <p class="walt-center">Estagiário em engenharia mecânica</p>
          <img src="imagens/prefeitura_recife_logo.png" alt="Prefeitura do Recife">
          <hr>
           <div>
               
                <p class="walt-center">Participei ativamente como trainee voluntário na Poli Junior Engenharia em um projeto de adequação à NR12.</p>
                <img style="margin-top: -15px;" width="100" src="imagens/poli-junior.png" alt="poli-junior">   
           </div>
           
           <div>
               <p class="walt-center">Ministrei aulas durante um ano e seis meses para turmas de pré-vestibular e também acompanhamento escolar.</p>
            <img width="150" src="imagens/cia_do_estudo.png" alt="cia_do_estudo"> 
           </div>
            
        </div>
       </fieldset>
        
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="walt-modal walt-black" onclick="this.style.display='none'">
        <span class="walt-button walt-large walt-black walt-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
        <div class="walt-modal-content walt-animate-zoom walt-center walt-transparent walt-padding-64">
            <img id="img01" class="walt-image">
            <p id="caption" class="walt-opacity walt-large"></p>
        </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 walt-display-container walt-opacity-min">
        <div class="walt-display-middle">
            <span class="walt-xxlarge walt-text-black walt-wide">CONTATO</span>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="walt-content walt-container walt-padding-64" id="contatoComHelio">
        <h3 class="walt-center">Contato</h3>
        <p class="walt-center"><em>Envie uma mensagem</em></p>

        <div class="walt-row walt-padding-32 walt-section">
            <div class="walt-col m4 walt-container">
                
            </div>
            <div class="walt-col m8 walt-panel">
                <div class="walt-large walt-margin-bottom">
                    <i class="fa fa-map-marker fa-fw walt-hover-text-black walt-xlarge walt-margin-right"></i> Cabo de Santo Agostinho, PE, Brasil.<br>
                    <i class="fa fa-phone fa-fw walt-hover-text-black walt-xlarge walt-margin-right"></i> Tel: (81) 9 8441-8408 / (81) 9 8874-0314<br>
                    <i class="fa fa-envelope fa-fw walt-hover-text-black walt-xlarge walt-margin-right"></i> Email: heliomiguel_barros@hotmail.com.br<br>
                </div>
                <p>Vamos tomar um café <i class="fa fa-coffee"></i>, entre em contato:</p>
                <form action="enviaMsg.php" method="post">
                    <div class="walt-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="walt-half">
                            <input class="walt-input walt-border" type="text" placeholder="Name" required name="nome">
                        </div>
                        <div class="walt-half">
                            <input class="walt-input walt-border" type="email" placeholder="Email" required name="email">
                        </div>
                    </div>
                    <input style="margin-bottom: 8px;"class="walt-input walt-border" type="text" placeholder="Assunto" required name="assunto">    
                    <input class="walt-input walt-border" type="text" placeholder="Mensagem" required name="mensagem">
                    <input class="walt-button walt-black walt-right walt-section" type="submit" value="Enviar Mensagem">
         
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="walt-center walt-black walt-padding-64 walt-opacity walt-hover-opacity-off">
        <a href="#home" class="walt-button walt-light-grey"><i class="fa fa-arrow-up walt-margin-right"></i>Voltar ao topo</a>
        <div class="walt-xlarge walt-section" id="redeSocial">
            <a  href="https://www.facebook.com/helio.miguel.33" target="_blank"><i style="margin-right: 20px;" class="fa fa-facebook-official walt-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/helio-barros-089466a1/" target="_blank"><i class="fa fa-linkedin walt-hover-opacity"></i></a>
        </div>
    </footer>

    <!-- Add Google Maps -->
    <script>
       
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }

        // Change style of navbar on scroll
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "walt-bar" + " walt-card-2" + " walt-animate-top" + " walt-white";
            } else {
                navbar.className = navbar.className.replace(" walt-card-2 walt-animate-top walt-white", "");
            }
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("walt-show") == -1) {
                x.className += " walt-show";
            } else {
                x.className = x.className.replace(" walt-show", "");
            }
        }
    </script>
    <script src="js/minhasRegras.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="css/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap-js/bootstrap.min.js"></script>
    


</body>

</html>
