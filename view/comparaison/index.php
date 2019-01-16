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
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                                    if (isset($user)&&$user->grade=='admin') {
                                        if (!isset($users)) {
                                            echo "<a class=\"nav-link\" href="."\"".BASE_URL."/user"."\"".">Gestion des membres</a>";
                                        }
                                        else {
                                            echo "<a class=\"nav-link active\" href="."\"".BASE_URL."/user"."\"".">Gestion des membres</a>";
                                        }
                                    }                                    
                                ?>
                           </li>
                            <li class="nav-item">
                                <?php 
                                    if (isset($accueil)||isset($id_categorie)||isset($users)) {
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
                <div class="col-xs-12 col-md-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 header-compare">
                                <div class="btn-group school-one">
                                    <select name="ecoles1" id="ecoles1">
                                        <option value="">Select categorie first</option>
                                    </select>
                                </div>
                                <div class="btn-group compare-school">
                                    <select name="categorie" id="categorie">
                                        <?php
                                            foreach ($categorieEcole as $categorie) {
                                                echo '<option value="'.$categorie->id.'">'.$categorie->designation.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="btn-group school-two">
                                    <select name="ecoles2" id="ecoles2">
                                        <option value="">Select categorie first</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <table class="table table-bordered table-hover" id="formation1">
                                    
                                </table>
                                <ul class="list-group list-group-flush" id="commentaire1">

                                </ul>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <table class="table table-bordered table-hover" id="formation2">
                                    
                                </table>
                                <ul class="list-group list-group-flush" id="commentaire2">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </main>
    <footer class="footer">
        <ul class="nav justify-content-center">
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
                    if (isset($user)&&$user->grade=='admin') {
                        if (!isset($users)) {
                            echo "<a class=\"nav-link\" href="."\"".BASE_URL."/user"."\"".">Gestion des membres</a>";
                        }
                        else {
                            echo "<a class=\"nav-link active\" href="."\"".BASE_URL."/user"."\"".">Gestion des membres</a>";
                        }
                    }
                ?>
            </li>
            <li class="nav-item">
                <?php
                    if (isset($accueil)||isset($id_categorie)||isset($users)) {
                        echo "<a class=\"nav-link\" href="."\"".BASE_URL."/apropos"."\"".">A propos</a>";
                    }
                    else {
                        echo "<a class=\"nav-link active\" href="."\"".BASE_URL."/apropos"."\"".">A propos</a>";
                    }
                ?>
           </li>
        </ul>
    </footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/popper.min.js"."\""; ?>></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/script.js"."\""; ?>></script>
</body>
</html>