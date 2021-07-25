<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {
                echo $title . ' - ';
            } ?>ECF - HTML/CSS</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php" class="nav-title">DWWM</a>
            </div>
            <nav class="main-nav">
                <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
                <ul id="menu" class="menu" role="list" hidden>
                    <li class="menu-item">
                        <a href="index.php" class="menu-link ">accueil</a>
                    </li>
                    <li class="menu-item">
                        <a href="formation.php" class="menu-link">la formation</a>
                    </li>
                    <li class="menu-item">
                        <a href="etudiants.php" class="menu-link">les étudiants</a>
                    </li>
                    <li class="menu-item">
                        <a href="actualites.php" class="menu-link">actualités</a>
                    </li>
                    <li class="menu-item">
                        <a href="contact.php" class="menu-link">nous contacter</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>