<!DOCTYPE html>
<html>
  <head>
    <title>
      Ingresar clientes
    </title>
    <meta charset='utf-8'> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    
    
    <style>
      
      /* http://css-tricks.com/perfect-full-page-background-image/ */
      html {
        /* background: url(img/6133364748_89f2365922_o.jpg) no-repeat center center fixed;
        */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      
      body {
        padding-top: 20px;
        font-size: 16px;
        font-family: "Open Sans",serif;
        background: transparent;
      }
      
      h1 {
        font-family: "Abel", Arial, sans-serif;
        font-weight: 400;
        font-size: 40px;
      }
      
      /* Override B3 .panel adding a subtly transparent background */
      .panel {
        background-color: rgba(255, 255, 255, 0.9);
      }
      
      .margin-base-vertical {
        margin: 40px 0;
        text-align: center;
      }
      
    </style>
    
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
          
          <h1 class="margin-base-vertical">
            Editar Estudiante
          </h1>
          
          <form class="form-horizontal" action="<?php echo base_url();?>cliente/EditarCliente" method="Post">

            <fie1ldset>
              <input type="hidden" name='id' value="<?php echo $data->Id; ?>" >

              <div class="control-group">
                <label class="control-label">
                  Correo
                </label>
                <div class="controls">
                  <input id="correo" name="cedula" type="text" placeholder="C&#233;dula" class="input-xlarge" value="<?php echo $data->Cedula; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
             
              <div class="control-group">
                <label class="control-label">
                  Nombre completo
                </label>
                <div class="controls">
                  <input id="nombre" name="nombre" type="text" placeholder="Nombre completo"
                  class="input-xlarge" value="<?php echo $data->Nombre; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
            
              <div class="control-group">
                <label class="control-label">
                  Cédula
                </label>
                <div class="controls">
                  <input id="cedula" name="email" type="text" placeholder="Email"
                  class="input-xlarge" value="<?php echo $data->Email; ?>">
                  <p class="help-block">                    
                  </p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">
                  Contraseña
                </label>
                <div class="controls">
                  <input id="contrasena" name="direccion" type="text" placeholder="Direcci&#243;n"
                  class="input-xlarge" value="<?php echo $data->Direccion; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>             
              
              
                  </fieldset>
                  <br>
                  <p class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">
                      Guardar
                    </button>
                  </p>
              </form>
              
              
          </div>
          
      </div>
  
    </div>
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>

    <script type="text/javascript">

      $(function() {

          $('#pais').val("<?php echo $data->Pais; ?>")
      });

      

    </script>
  </body>
</html>