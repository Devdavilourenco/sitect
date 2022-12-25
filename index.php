<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <style>
  h3{
    text-align: center;
    color: white;
  } 
  body{
    background-color:grey;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  main{
    flex: 1 0 auto;

  }
  section{
    background-color:grey;
    display: inline-block;
    min-height: 100vh;
    flex-direction: column;
  
  }

      </style>
    </head>

    <body>

    <nav>
    <div class="nav-wrapper">
      <a href="img/historiact.jpg" class="brand-logo center">CT BP FiGHT</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">inicio</a></li>
        <li><a href="professores.php">treinadores</a></li>
        <li><a href="horarios.php">horários</a></li>
        <li><a href="localizacao.php">localização</a></li>
        <li><a href="cadastro.php">cadastrar</a></li>
      </ul>
    </div>
  </nav><br>

  <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">  
    </div>
    <a href="historia.php">
    <div class="carousel-item red white-text" href="#one!">
        <img src="img/historiact.jpg" width="500px" height="300px">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
</a>
  </div><br> 

<h3><i>Treinadores do CT</i></h3>

  <section>
  <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/lutador.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Treinador Davi Lourenço</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/lutador.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Treinador Davi Lourenço</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/lutador.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Treinador Davi Lourenço</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
      </div>  
      <br>
</section>



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>$('.carousel.carousel-slider').carousel({fullWidth: true});</script><br>

      <main>
      <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CT BP FIGHT</h5>
                <p class="grey-text text-lighten-4"><i>mais informações</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">redes sociais</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://wa.me/5585988719784">whatsapp</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/bell_pereira0602?igshid=Yzg5MTU1MDY=">instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <i class="material-icons">copyright</i>2022 Copyright Text Devdavilourenco
            </div>
          </div>
        </footer>
</main>
    </body>
  </html>
        