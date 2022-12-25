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
           section{
            border-radius:black 20px;
            padding: 15px;
            width:630px;
            margin:auto;
            background: white;
            box-shadow: 3px 3px 3px;
            text-align: center;
        }
        h2{
            text-align:center;
            color: white;
        }
        body{
            background-color: grey;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
    flex: 1 0 auto;
  }
      </style>
    </head>

    <body>

    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">CT BP FiGHT</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">inicio</a></li>
        <li><a href="professores.php">professores</a></li>
        <li><a href="horarios.php">horários</a></li>
        <li><a href="localizacao.php">localização</a></li>
      </ul>
    </div>
  </nav><br>
 
  <h2><i>realize seu cadastro</i></h2>


<section>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">nome completo</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">telefone</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
          <input id="icon_location_on" type="tel" class="validate">
          <label for="icon_location_on">endereço</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="icon_email" type="tel" class="validate">
          <label for="icon_email">email</label>
        </div>
      </div>
    </form>
  </div>
</section><br><br><br><br>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

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
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/ct_bp_fight_?igshid=Yzg5MTU1MDY=">instagram</a></li>
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
        