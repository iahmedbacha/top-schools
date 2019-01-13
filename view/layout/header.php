<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title><?php echo isset($title_for_layout)?$title_for_layout:'EcoleComparateur'; ?></title>
    
    <link rel="stylesheet" type="text/css" href=<?php echo "\"".BASE_URL."/public/css/bootstrap.min.css"."\""; ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo "\"".BASE_URL."/public/css/style.css"."\""; ?>>
</head>
<body>
    <header>
        <div class="logo-area">
            <img src=<?php echo "\"".BASE_URL."/public/assets/logo.png"."\""; ?>>
        </div>
        <div class="slideshow">
            <img src=<?php echo "\"".BASE_URL."/public/assets/slides/slide-img-01.jpg"."\""; ?> class="slide">
            <img src=<?php echo "\"".BASE_URL."/public/assets/slides/slide-img-02.jpg"."\""; ?> class="slide">
            <img src=<?php echo "\"".BASE_URL."/public/assets/slides/slide-img-03.jpg"."\""; ?> class="slide">
        </div>
    </header>
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2">
                    <?php 
                        if (!isset($user)) {
                            echo '<div class="login-area">';
                                echo '<form action="'.BASE_URL.'/user/login" method="post">';
                                    echo '<div class="form-group">';
                                        echo '<input type="text" class="form-control" id="inputUsername" name="username" placeholder="Nom d\'utilisateur">';
                                    echo '</div>';
                                    echo '<div class="form-group">';
                                        echo '<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mot de passe">';
                                    echo '</div>';
                                    echo '<button type="submit" class="btn btn-primary">Se connecter</button>';
                                echo '</form>';
                            echo '</div>';
                        }
                        else {
                            echo '<div class="user-infos-area">';
                                echo '<div class="user-image"></div>';
                                echo '<span class="user-name">'.$user->username.'</span>';
                                echo '<form action="'.BASE_URL.'/user/logout" method="post">';
                                    echo '<button type="submit" class="btn btn-link">Se déconnecter</button>';
                                echo '</form>';
                            echo '</div>';
                        }
                    ?>
                    <nav class="menu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <?php 
                                    if (!isset($accueil)) {
                                        echo "<a class=\"nav-link\" href="."\"".BASE_URL."/"."\"".">Accueil</a>";
                                    }
                                    else {
                                        echo "<a class=\"nav-link active\" href="."\"".BASE_URL."/"."\"".">Accueil</a>";
                                    }
                                ?>
                            </li>
                            <?php 
                                foreach ($categorieEcole as $categorie) {
                                    echo "<li class=\"nav-item\">";
                                        if (isset($id_categorie)&&($id_categorie==$categorie->id)) {
                                            echo "<a class=\"nav-link active\" href=\"".BASE_URL."/categorie/show/".$categorie->id."\">".$categorie->designation."</a>";
                                        }
                                        else {
                                            echo "<a class=\"nav-link\" href=\"".BASE_URL."/categorie/show/".$categorie->id."\">".$categorie->designation."</a>";
                                        }
                                        
                                    echo "</li>";
                                }
                            ?>
                            <li class="nav-item">
                                <?php 
                                    if (isset($accueil)||isset($id_categorie)) {
                                        echo "<a class=\"nav-link\" href="."\"".BASE_URL."/apropos"."\"".">A propos</a>";
                                    }
                                    else {
                                        echo "<a class=\"nav-link active\" href="."\"".BASE_URL."/apropos"."\"".">A propos</a>";
                                    }
                                ?>
                           </li>
                        </ul>
                    </nav>
                </div>
