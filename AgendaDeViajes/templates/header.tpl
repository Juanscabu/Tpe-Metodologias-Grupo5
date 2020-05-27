<html lang="en">
<head>
    <base href="{$basehref}">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>{$titulo}</title>
</head>


<body>
  <contenedor>
 <!--  <logo><img src="images/logo.jpg" alt="Logo viajes" class="logo"></logo> -->
    <navbar>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrarMisViajes">Mis Viajes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrarAgregarViajes">Agregar Viajes</a>
                </li>
              </ul>
            {include 'templates/login.tpl'}
            </div>
          </nav>
        </navbar>