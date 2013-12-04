<!DOCTYPE html>
<html>
  <head>
    <title>
      LOGIN
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    
    
    <style>
      
        body {
    padding-top: 15px;
    font-size: 12px
  }
  .main {
    max-width: 320px;
    margin: 0 auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
            margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
    text-align: center;
    line-height: 300%;
  }

    </style>
    
  </head>
  <body>
    
    <div class="container">
  <div class="row">

    <div class="main">
      

      <form role="form" action="<?php echo base_url();?>login/Autenticar" method="Post">
        <div class="form-group">
          <label for="inputUsernameEmail">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <br>
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Clave</label>
          <input type="password" class="form-control" id="clave" name="clave">
        </div>
        
      <br>
      <br>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      <div class="row">
        <br>
        <form role="form" >
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="Estudiante/Crear"  class="btn btn-lg btn-info btn-block">Registrarse</a>
        </div>
      </form>
      </div>
      </form>
      <br>
      
    
    </div>
    
  </div>
</div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>