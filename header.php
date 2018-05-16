 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Road</title>
</head>
<body>
<header>
    <form method="post" action="traitement.php" id="login">
        <div class="form-group">
            <label for="pseudo" > <i class="fas fa-user"></i> </label>
            <input type="text" name="pseudo" id="pseudo" required autofocus placeholder="Identifiant"/>
        </div>
        <div class="form-group">
            <label for="mdp" > <i class="fas fa-key"></i> </label>
            <input type="password" name="mdp" id="mdp" required placeholder=" Mot de passe"/>
        </div>
        <input type="submit" value="Connexion" class="btn"/>
    </form>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><i class="fas fa-motorcycle"></i>Road</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Etapes <span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Motos</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Budget</a>
                 </li>
            <!-- menu déroulant / menu non disponible
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
             </ul>
            <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
         </div>
    </nav>
</header>


