

  <html>

    <head>

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="css/style.css" />

      <meta charset="utf-8" />

      <title>Gabinete Online</title>

      <link rel="shortcut icon" href="img/icon.ico" >
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="js/script-load-dash.js"> </script>


    </head>
  <body style="padding: 0; background-color: #000000">
  <div class="p-3 mb-2 text-white" style="padding: 0; background-color: #000000; margin-top:30px">

  <!-- The Modal -->

    <div class="modal fade bd-example-modal-lg" id="myModal">

      <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content"  style="padding:5px">

         

          <!-- Modal body -->

          <div class="modal-body embed-responsive embed-responsive-16by9">

            <iframe id= "videoInicial"width="560" height="315" src="https://www.youtube.com/embed/b6ooRAc2Y2o?controls=0" frameborder="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>

          

          <!-- Modal footer -->

          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="fecharModal">Fechar</button>

          </div>

          

        </div>

      </div>

    </div>





    <script >

        $('#myModal').modal('show');

        $('#fecharModall').click(function() {

            $('iframe').each(function(){ 

                var frame = document.getElementById("videoInicial");

                frame.contentWindow.postMessage(

                    '{"event":"command","func":"pauseVideo","args":""}',

                    '*'); 

            });

          });



    </script> 
  <nav class="container-fluid text-center" style="background-color:#000000; border-radius: 20px; ">

        <div class="row justify-content-center align-self-center">
        <ul id="menu-inicial"> 
            <li><img src="img/logo-gabi-para-teste.png" width="320" class="d-inline-block align-top" alt=""></li>
            <li>
                <div class="d-inline-block align-top" style="width: 240px; height:95px; padding:10px">
                  <div class="row">
                      <div class="col-md-6" style="margin-bottom:10px">
                          <span style="font-size:12px">TOTAL DE <b>INDICAÇÕES</b><br> </span>
                          <div style="width: 100%; height:30px; background-color:#ffc000; border-radius:20px"><span style="font-size:20px" id="dash-index-indicacoes"><img src="img/loader-dash.gif" width="25"/></span></div>
                          </div>
                      <div class="col-md-6" style="margin-bottom:10px">
                          <span style="font-size:12px">TOTAL DE <b>DENÚNCIAS</b><br> </span>
                          <div style="width: 100%; height:30px; background-color:#ffc000; border-radius:20px"><span style="font-size:20px" id="dash-index-denuncias"><img src="img/loader-dash.gif" width="25"/></span></div>
                          </div>
                          </div>

                      </div>
                  </div>
                  </div>
                </div>
            </li>
          
            </ul>
        </div>


        <nav class="row text-center " style="padding: 5px" id="nav-target">



        <nav class="container-fluid nav-bar" style="border:1px; background-color:#00000; border-radius: 10px 10px 10px 10px">



        <nav class="navbar navbar-expand-sm navbar-dark">



        <!-- Menu Hamburguer -->
        <br><br><br><br>

        <button  class="navbar-toggler mr-auto ml-auto" data-toggle="collapse" data-target="#navegacao">

            <span class="navbar-toggler-icon"></span>

        </button>



        <!-- navegacao -->

        <div class="collapse navbar-collapse" id="navegacao">

            <ul class="navbar-nav container">

                <li class="nav-item col-md" id="effector-01" >

                    <a href="abrir_chamado.php" target="_blank" class="nav-link"><h5></span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>

                    </svg> 

                    Criar indicação</h5></a>

                </li>

                <li class="nav-item col-md"  id="effector-03">

                    <a href="abrir_denuncia.php" target="_blank" class="nav-link"><h5> 

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>

                    </svg>   

                    Criar denúncia</h5></a>

                </li>

                <div class="dropdown ">

                <li class="btn dropdown-toggle col-md"  id="effector-02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                    <h5 style="color:#ffffff">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>

                    </svg> 

                    Consultar protocolos</h5>

                </li>

                <div class="dropdown-menu" aria-labelledby="effector-02">
                  <a class="dropdown-item" href="consultar_chamado.php" target="_blank">Consultar indicação &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  <a class="dropdown-item" href="consultar_denuncia.php" target="_blank">Consultar denúncia</a>
                </div>

              </div>



                <li class="nav-item col-md"  id="effector-04">

                    <a href="banco_ideias.php" target="_blank"  class="nav-link"><h5>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>

                    </svg>   

                    Banco de idéias</h5></a>

                </li>

            </ul>

        </div>

    </nav>

    </nav>

        </nav>

           

          

          <script>

        // Função para formatar 1 em 01

          const zeroFill = n => {

          return ('0' + n).slice(-2);

         }



        // Cria intervalo

        const interval = setInterval(() => {

          // Pega o horário atual

          const now = new Date();



          // Formata a data conforme dd/mm/aaaa hh:ii:ss

          const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());



          // Exibe na tela usando a div#data-hora

          document.getElementById('data-hora').innerHTML = dataHora;

        }, 1000);



      </script>

    </div><!-- Cria data e Hora no código -->

  </div>

  </nav>

   

  <div class="container">

    <div class="row">

      <div class="col-md mt-1 mr-auto ml-auto">

      </div>

    </div>

   </div>



    <div id="carousel-controles" class="carousel slide" data-ride="carousel" >

      <ol class="carousel-indicators">

        <li class="active" data-target="#carousel-controles" data-slide-tot="0"></li>

        <li data-target="#carousel-controles" data-slide-tot="1"></li>   

        <li data-target="#carousel-controles" data-slide-tot="1"></li>

        <li data-target="#carousel-controles" data-slide-tot="1"></li>         

        

      </ol>



      <div class="carousel-inner" style="border-radius: 20px">



        <!-- Carrousel 01 -->



        <div class="carousel-item active"> 

          <img src="img/carousel/03.jpg" class="img-fluid">

        </div>

        <!-- Carrousel 02 -->



        <div class="carousel-item">

            <img src="img/carousel/04.jpg" class="img-fluid">       

            </div>



        <!-- Carrousel 02 -->



        <div class="carousel-item">

            <img src="img/carousel/02.jpg" class="img-fluid">       

            </div>



        <!-- Carrousel 03 -->

        <div class="carousel-item"> 

          <img src="img/carousel/01.jpg" class="img-fluid">

        </div>



        

        <!-- Buttons PREV - NEXT -->

      </div>



      <a href="#carousel-controles" class="carousel-control-prev" data-slide="prev">

        <span class="carousel-control-prev-icon"></span>

        

      </a>



       <a href="#carousel-controles" class="carousel-control-next" data-slide="next">

        <span class="carousel-control-next-icon"></span>

        

      </a>





      

    </div>



  </div>



  <br>

  <br>

    <FOOTER class = "container">

  <div>

    <div class="row justify-content-center text-center text-md-left">

      <div class="col-md" style="padding: 20px 0 20px 0;">

        <img src="img/logo.png" width="180">

      </div>

      <div class="col-md" style="padding: 0px 0 20px 0">

        <h5> MAPA DO SITE </h5>

        <ul class="navbar-nav">

          <li><a href="index.php">Página inicial </a></a></li>

          <li><a href="abrir_denuncia.php">Faça uma denúncia </a></a></li>

          <li><a href="consultar_chamado.php">Consultar indicações </a></a></li>

        </ul>

      </div>

      <div class="col-md" style="padding: 0px 0 20px 0">

       <h5> LINKS ÚTEIS </h5>

       <ul class="navbar-nav">

        <li><a href="https://bit.ly/avalie-a-plataforma" target="_blank">Avaliar plataforma </a></a></li>

        <li><a href="https://bit.ly/problemas-plataforma" target="_blank">Relatar problemas </a></a></li>

      </ul>

    </div>

    <div class="col-md" style="padding: 0px 0 20px 0;">  

      <ul class= "nav justify-content-center">

        <li class="redes-sociais"><a href="https://bit.ly/facebook-gabigreg" target="_blank"><img src="img/facebook.svg"></a></li>

        <li class="redes-sociais"><a href="https://bit.ly/instagram-gabigreg" target="_blank"><img src="img/instagram.svg"></a></li>

        <li class="redes-sociais"><a href="https://bit.ly/yotube-gabigregl" target="_blank"><img src="img/youtube.svg"></a></li>

        <li class="redes-sociais"><a href="https://bit.ly/whatsapp-gabigreg" target="_blank"><img src="img/whatsapp.svg"></a></li>

      </ul>

    </div>

  </div>

</div>

</footer>

    </body>

  </html>