<!DOCTYPE html>
<html>
  <head>
    <title>
      Estudiante
    </title>
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
      
      .margin-base-vertical {
        font-family: "Open Sans",serif;
        margin: 10px 0;
        text-align: left;
      }
      
    </style>
    
  </head>
  <body>
    
    
    <div class="container">
      
      
      <?php

   
        foreach ($data as $row) {            




            echo '     <div class="row"> ';
            echo '        <div class="col-md-6 col-md-offset-3 panel panel-default"> ';
            echo '          <div class="media"> ';
            echo '            <a class="pull-left" href="#"> ';
            echo '                <img class="media-object dp img-circle" src="'.$hola.'" style="width: 100px;height:100px;"> ';
            echo '            </a> ';
            echo                  '<div class="btn-group pull-right">';
            echo '                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">';
            echo '                    Configuraci&#243;n ';
            echo '                    <span class="icon-cog icon-white"></span><span class="caret"></span>';
            echo '                </a>';
            echo '                <ul class="dropdown-menu">';
            echo '                    <li><a href="' . base_url() . 'Estudiante/Editar/' . $row['Id_Estudiante'] . '"><span class="icon-wrench"></span> Editar</a></li>';
            echo '                    <li><a href="' . base_url() . 'Estudiante/Eliminar/' . $row['Id_Estudiante'] . '"><span class="icon-trash"></span> Eliminar</a></li>';
            echo '                </ul>';
            echo '            </div>';
            echo '            <div class="media-body"> ';
            echo '                <span class="label label-default">' . $row['Correo'] . '</span> ';
            echo '                <span class="label label-default">' . $row['Nombre'] . '</span> ';
            echo '                <span class="label label-info">' . $row['Cedula'] . '</span> ';
            echo '            </div>';
            echo '          </div>';
            echo '        </div>';
            echo '        <!-- //main content -->';
            echo '      </div>';           
        }
      ?>

      <!-- //row -->
    </div>

    
    <!-- //container -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>