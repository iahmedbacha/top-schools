<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title><?php echo isset($title_for_layout)?$title_for_layout:'EcoleComparateur'; ?></title>
    
    <link rel="stylesheet" type="text/css" href=<?php echo "\"".BASE_URL."/public/css/bootstrap.min.css"."\""; ?>>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=<?php echo "\"".BASE_URL."/public/css/school-style.css"."\""; ?>>
</head>
<body class="body">
    <header>
        <div class="container">
            <div class="school-logo-area">
                <img src=<?php echo "\"".BASE_URL."/public/assets/logo-school.png"."\""; ?> class="logo">
                <h1><?php echo $ecole->nom; ?></h1>
            </div>
            <div class="slideshow">
                <img src=<?php echo "\"".BASE_URL."/public/assets/slides-school/slide-img-01.jpg"."\""; ?> class="slide">
                <img src=<?php echo "\"".BASE_URL."/public/assets/slides-school/slide-img-02.jpg"."\""; ?> class="slide">
                <img src=<?php echo "\"".BASE_URL."/public/assets/slides-school/slide-img-03.jpg"."\""; ?> class="slide">
                <img src=<?php echo "\"".BASE_URL."/public/assets/slides-school/slide-img-04.jpg"."\""; ?> class="slide">
            </div>
            <h2>Commentaires</h2>
        </div>
    </header>
    <main>
        <section class="comments">
            <div class="container">
                <ul class="list-group list-group-flush">
                	<?php 
                		foreach ($commentaires as $commentaire) {
                			echo "<li class=\"list-group-item\">";
                				echo "<div class=\"comment\">";
                					echo "<div class=\"commenter-image\"></div>";
                					echo "<div class=\"commenter-text\">";
                						echo "<div class=\"header-infos\">";
                							echo "<span class=\"commenter-name\">".$commentaire->nom." ".$commentaire->prenom."</span>";
                							echo "<span class=\"comment-time\">11:10 a.m</span>";
                						echo "</div>";
                						echo "<p>".$commentaire->contenu."</p>";
                                        if (isset($user)) {
                                            if ($user->grade=='admin') {
                                                echo  '<form class="delete-area" action="'.BASE_URL.'/commentaire/destroy/'.$commentaire->id.'" method="post">';
                                                    echo '<button class="btn">';
                                                        echo '<span><i class="far fa-trash-alt"></i></span>';
                                                        echo '<span> SUPPRIMER</span>';
                                                    echo '</button>';
                                                echo '</form>';
                                            }
                                        }
                					echo "</div>";
                				echo "</div>";
                                foreach ($reponses as $reponse) {
                                    if ($reponse->id_commentaire==$commentaire->id) {
                                        echo '<div class="sub-comments">';
                                            echo '<ul>';
                                                echo '<li class="list-group-item">';
                                                    echo '<div class="header-comment">';
                                                        echo '<div class="commenter-image"></div>';
                                                        echo '<div class="commenter-text">';
                                                            echo '<div class="header-infos">';
                                                                echo '<span class="commenter-name">'.$reponse->nom.' '.$reponse->prenom.'</span>';
                                                                echo '<span class="comment-time">12:10 a.m</span>';
                                                            echo '</div>';
                                                            echo '<p>'.$reponse->contenu.'</p>';
                                                            if (isset($user)) {
                                                                if ($user->grade=='admin') {
                                                                    echo '<form class="delete-area">';
                                                                        echo '<button class="btn">';
                                                                            echo '<span><i class="far fa-trash-alt"></i></span>';
                                                                            echo '<span> SUPPRIMER</span>';
                                                                        echo '</button>';
                                                                    echo '</form>';
                                                                }
                                                            }
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</li>';
                                            echo '</ul>';
                                        echo '</div>';
                                    }
                                }
                                if (isset($user)) {
                                    if (($user->grade=='admin')||(($user->grade=='employe')&&($user->id_ecole==$ecole->id))) {
                                        echo '<form class="add-sub-comment-container" action="'.BASE_URL.'/reponse/create" method="post">';
                                            echo '<textarea class="form-control" name="contenu"></textarea>';
                                            echo '<div class="add-comment">';
                                                echo '<a class="btn btn-primary" href="#" role="button" style=>';
                                                    echo '<i data-feather="message-square"></i>';
                                                    echo '<span>Entrer</span>';
                                                echo '</a>';
                                            echo '</div>';
                                        echo '</form>';
                                    }
                                }
                			echo "</li>";
                		}
                	?>
                </ul>
                <div class="add-comment-container">
                    <textarea class="form-control" aria-label="With textarea" name="contenu" form="form-add-comment"></textarea>
                </div>
            </div>
        </section>
        <?php 
            if (isset($user)) {
                echo '<section class="add-comment">';
                    echo '<div class="container">';
                        echo '<form action='.BASE_URL.'/commentaire/create method="post" id="form-add-comment">';
                            echo '<input type="text" name="id_user" value="'.$user->id.'" hidden>';
                            echo '<input type="text" name="id_ecole" value="'.$ecole->id.'" hidden>';
                            echo '<button class="btn btn-primary">';
                                echo '<i data-feather="message-square"></i>';
                                echo '<span>Entrer</span>';
                            echo '</button>';
                        echo '</form>';
                    echo '</div>';
                echo '</section>';
            }
        ?>
        
    </main>
    <footer class="footer">
    </footer>

    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/jquery-3.3.1.js"."\""; ?>></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/bootstrap.min.js"."\""; ?>></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/script.js"."\""; ?>></script>
</body>