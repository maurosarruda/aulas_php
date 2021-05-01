<html lang="pt-br">

<head>
    <title>Bootstrap 4 Workflow</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS redirect with our offline SASS -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">

    <!-- Requiring the file "estilo.scss" -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/estilo.css">

    <!-- Requiring the file "font-awesome.css" -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">ViajarRotary.pt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2 mt-2 mt-md-0" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark mt-md-0 mt-3" type="Submit">OK</button>
                </form>
            </div>
        </div>
    </nav>