<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />

    <!-- Swiper.js -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
      />
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Contabilidade Sant'Ana</title>
    <link rel="icon" href="./img/icon-removebg-preview.png" />
    
  </head>
  <body >
    <!-- início do preloader -->
    <div id="preloader">
      <div class="inner">
        <div class="bolas">
            <div></div>
            <div></div>
            <div></div>                    
        </div>
      </div>
    </div>
<!-- fim do preloader --> 
    <!-- inicio Cabecalho -->
    <header>
      <!-- primeira parte -->
      <nav class="navbar navbar-expand-sm navbar-light  navbartrasp2">
        <!-- navegacao -->
        <div class="container">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-auto">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fab fa-instagram instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- segunda parte -->
      <nav class="navbar sticky navbar-expand-sm navbar-light  navbartrasp">
        <!-- Logo -->
        <a href="index.html" class="navbar-brand"><img class="mr-4" src="./img/logo.jpg" alt="" width="65" style="border-radius: 100%;" ></a>
  
        <!-- Menu Hamburguer -->
        <input type="checkbox" id="checkbox-menu">

        <label for="checkbox-menu" class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navegacao2">
         <span></span>
         <span></span>
         <span></span>
       </label>
  
        <!-- navegacao -->
        <div class="collapse navbar-collapse" id="navegacao2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#servicos" class="nav-link">Nossos Serviços</a>
            </li>
            <li class="nav-item">
              <a href="#sobre" class="nav-link">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a href="#parceiros" class="nav-link">Parceiros</a>
            </li>
            <li class="nav-item">
              <a href="#principios" class="nav-link">Nosso Princípios</a>
            </li>
            <li class="nav-item">
              <a href="./contato.html#formulario_orcamento" class="nav-link">Orçamentos</a>
            </li>
            <li class="nav-item" id="contato_unico">
              <a href="./contato.html" class="nav-link">Contato</a>
            </li>
            <li class="nav-item" id="menu-sumir">
              <a href="./contato.html" class="btn btn-light ml-4 ml-4 ">Contato</a>
            </li>
          </ul>
    </header>
    <!--Fim cabeçalho-->
    <section id="home" class="d-flex"><!--home -->
      
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12 capa">
            
            <div id="carousel-spotify" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><!--Inner -->
                
                <div class="carousel-item active">
                  <h1>Contabilidade do seu negocio de forma prática , segura e econômica.</h1>
                  <a href="" class="btn btn-lg btn-custom btn-roxo">
                    Lorem ipsum
                  </a>

                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    Lorem ipsum
                  </a>
                </div>

                <div class="carousel-item">
                  <h1>Melhores contadores da região</h1>
                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    Lorem ipsum
                  </a>
                </div>

              </div><!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>

              <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>

            </div>

          </div>
        </div><!--/row -->
      </div><!--/container -->
      <div class="scroll-down">
      </div>
    </section><!--/home -->
    <section id="servicos" style="background: #0c0b34;" class="servico">
      <div class="titulo">
        <h5>Nossos Serviços</h5>
      </div>
      <div id="cards-info" class="container">
        <div class="caixa">
          <div class="marcador">
            <h2>01</h2>
            <h3>Departamento Pessoal</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="" data-toggle="modal" data-target="#modal1">Leia mais</a>
          </div>
        </div>
        
        <div class="caixa">
          <div class="marcador">
            <h2>02</h2>
            <h3>Escrita Fiscal</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>03</h2>
            <h3>Contabilidade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>04</h2>
            <h3>Assessoria Tributária</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>05</h2>
            <h3>Processos Empresariais</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>06</h2>
            <h3>Produtor Rural</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>07</h2>
            <h3>Consultoria Administrativa</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
        <div class="caixa">
          <div class="marcador">
            <h2>08</h2>
            <h3>Imposto de Renda Pessoal Física </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend enim quis purus interdum consectetur.</p>
            <a href="">Leia mais</a>
          </div>
        </div>
      </div>
    </section>
    <section id="sobre" class="about" style="background: #0c0b34;">
      <div class="container">
        <div class="titulo">
          <h5 class="about-txt">Sobre nos</h5>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row pt-4 pb-4">
              <div class="col-md-6 mb-4 ">
                <img
                  src="./img/funcionarios.jpg"
                  alt=""
                  class="img-fluid d-none d-md-block img-transition"
                />
              </div>
              <div class="col-md-6">
                <img
                  src="./img/sobre/1.jpg"
                  alt=""
                  class="img-fluid d-none d-md-block img-transition"
                />
              </div>
              <div class="col-md-6">
                <img
                  src="./img/sobre/2.jpg"
                  alt=""
                  class="img-fluid d-none d-md-block img-transition"
                />
              </div>
              <div class="col-md-6">
                <img
                  src="./img/sobre/5.jpg"
                  alt=""
                  class="img-fluid d-none d-md-block img-transition grande"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-4">
            <p>
              A Contabilidade Santana surgiu depois da experiência de um trabalho individual como
              colaborador para uma empresa especifica, diante do senária e da procura de mais
              profissionais e escritório de consultoria na região, se fez necessário obter sua própria
              identidade deixando assim o trabalho individual como colaborador e ingressando no
              mundo empresarial. Com muita competência e dedicação hoje atendemos empresas de
              toda região do Oeste desde junho de 2015.
              <br><br>
              Buscando a excelência na prestação de serviços contábeis, sempre atentos as mudanças
              do mercado e da nossa Legislação Brasileira estando sempre à frente das informações que
              acontece cada vez mais rápidas.
              <br><br>
              Focamos na consultoria contábil e empresarial, prestamos completa assessoria em todas
              as áreas pertinente a contabilidade e à Administração.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="parceiros" class="card-fk">
      <div class="swiper-contener">
        <div class="titulo">
          <h5 class="about-txt">Parceiros</h5>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="./img/right-quote.png" alt="" class="quote" width="64px">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec nulla bibendum diam dictum eleifend. Aenean feugiat ante at turpis aliquam finibus. Duis cursus orci sed purus dapibus suscipit. 
                </p>
                <div class="details">
                  <div class="imgBx">
                    <img src="./img/persoa.jpg" alt="">
                  </div>
                  <h3>Gustavo<br><span>Ceo</span></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img src="./img/right-quote.png" alt="" class="quote" width="64px">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec nulla bibendum diam dictum eleifend. Aenean feugiat ante at turpis aliquam finibus. Duis cursus orci sed purus dapibus suscipit. 
                </p>
                <div class="details">
                  <div class="imgBx">
                    <img src="./img/download.png" alt="">
                  </div>
                  <h3>Google<br><span>Empresa</span></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">  
            <div class="testimonialBox">
              <img src="./img/right-quote.png" alt="" class="quote" width="64px">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec nulla bibendum diam dictum eleifend. Aenean feugiat ante at turpis aliquam finibus. Duis cursus orci sed purus dapibus suscipit. 
                </p>
                <div class="details">
                  <div class="imgBx">
                    <img src="./img/pessoa2.jpg" alt="">
                  </div>
                  <h3>Juliana Costa<br><span>Tecnico de TI</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section id="principios" style="background: #0c0b34;" class="principios">
      <div class="container">
        <div class="titulo">
          <h5 class="about-txt">Nossos Princípios</h5>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
              <h6>NOSSA MISSÃO</h6>
              <p>
                Atender as necessidades de nossos clientes sempre buscando a qualidade nos serviços, mantendo os padrões da ética e a sua satisfação.
              </p>
              <h6>NOSSA VISÃO</h6>
              <p>
                Tornar-se referência na Região Oeste na consultoria contábil e Administrativa, através da prestação de serviço com total transparência e compromisso.
              </p>
              <h6>NOSSOS VALORES</h6>
              <p >
                Manter a transparência, o compromisso a parceira e buscar sempre a inovação.
              </p>
            </div>
            <div class="col-md-6">
              <div class="row">
                <video src="/video/video.mp4" preload="auto" width="400" height="250" autoplay loop controls></video>
              </div>
            </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="index.html" class="navbar-brand">
              <h6>Contabilidade<br>Santana</h6>
            </a>
          </div>
          <div class="col-md-3">
            <h6>Navegação</h6>
            <ul class="navbar-nav">
              <li><a href="#servicos">Serviços</a></li>
              <li><a href="#sobre">Sobre</a></li>
              <li><a href="#parceiros">Parceiros</a></li>
              <li><a href="#principios">Princípios</a></li>
              <li><a href="">Orçamento</a></li>
              <li><a href="">Contato</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h6>Contato</h6>
            <ul class="navbar-nav">
              <li><a href="">Contador: José Leonam C. Sant´Ana <br>
                CRC: 035043-O/0 BA</a></li>
              <li><a href="">Email: leonam@constsantana.com.br</a></li>
              <li><a href="">Celular: (77) 98826-9964 
              </a></li>
              <li><a href="">Telefone: (77) 3611-7762</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="icon-flooter">
              <li class="item-icon"><a href="#"><i class="fab fa-facebook-f cada-icon"></i></i></a></li>
              <li class="item-icon"><a href="#"><i class="fab fa-instagram cada-icon"></i></a></li>
              <li class="item-icon"><a href="#"><i class="fab fa-whatsapp "></i></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <footer>
      <div class="container">
        <div class="row">
          <div class="sub ml-auto mr-auto mt-4 pt-2">
            <h3>© Feito por <a href="https://www.topsoft.inf.br/">Top Soft Informática</a></h3>
          </div>
        </div>
      </div>
    </footer>
    <div class="scroll-top-wrapper">
      <i class="far fa-arrow-alt-circle-up icon-up"></i>
         <!-- <i class="fa fa-2x fa-arrow-circle-up"></i> -->
       </span>
     </div>
     
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="./js/preloader.js"></script>
    <script type="text/javascript" src="./js/vanilla-tilt.js"></script>
    <script src="./js/script.js"></script>
    <!-- Swiper.js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-contener", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2,
          slideShadows: true,
        },
        loop:true
      });
    </script>

    <!-- Voltar ao topo -->
    <script src="external/top/jquery.min.js"></script>
    <script src="external/top/jquery.easing.min.js"></script>
    <script src="external/top/bootstrap.min.js"></script>
    <script src="external/top/custom.js"></script>
    <script src="external/top/contactform.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </body>
</html>

<?php

$rota = $_GET['url'] ?? 'index'


?>