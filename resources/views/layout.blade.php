<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>NRP - Inicio</title>
</head>
<body class="background-home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
                <div class="container">
                        <a class="navbar-brand" href="#">NRP</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="<?php echo route('inicio'); ?>"><i class="material-icons menu-icon align-text-bottom">home</i> Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="<?php echo route('historial'); ?>"><i class="material-icons menu-icon align-text-bottom">history</i> Historial CSV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo route('log-acceso'); ?>"><i class="material-icons menu-icon align-text-bottom">description</i> Log acceso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo route('gestionar-usuarios'); ?>"><i class="material-icons menu-icon align-text-bottom">supervisor_account</i> Gestionar usuarios</a>
                            </li>
                          </ul>
                          <span class="navbar-text">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons menu-icon align-text-bottom">account_circle</i> Francisca</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"><i class="material-icons menu-icon align-text-bottom">power_settings_new</i> Desconectar</a>
                                    </div>
                                </li>
                          </span>
                        </div>
                </div>
              </nav>

    <div class="container">    
        <div class="row">
        @yield('contenido')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>