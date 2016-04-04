<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Button Pusher!</title>

    <script src="jquery/jquery-2.1.4.min.js"></script>
    <script src="js/push_button.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">Button Pusher!</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>

    <div id="loadimage">
      <img id="loading" src="img/wait_big.gif" />
    </div>

    <div class="container theme-showcase" role="main">
      <div id="alerts">
        <div id="buttonInfo" class="buttonAlert alert alert-info" role="alert">
          Cuando pulses este botón, se pulsará otro botón, pero en el mundo real... ;-)
        </div>
        <div id="buttonOK" class="buttonAlert alert alert-success collapse" role="alert">
          <strong>¡Botón pulsado correctamente!</strong>
        </div>
        <div id="buttonError" class="buttonAlert alert alert-danger collapse" role="alert">
          <strong>¡Error!</strong> Hay algún problema al pulsar el botón, inténtalo de nuevo.
        </div>
      </div>

      <p>
        <!-- <button id="pushbutton" type="button" class="btn btn-lg btn-default">Default</button> -->
        <button id="pushbutton" type="button" class="btn btn-lg btn-info">Pulsar botón</button>
      </p>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>
    -->
  </body>
</html>
