            <div class="col-xs-12 col-md-10">
                    <div class="main-content">
                        <div class="container">
                            <div class="row">
                                <?php 
                                    foreach ($categorieEcole as $categorie) {
                                        echo "<div class=\"col-xs-12 col-md-6 col-lg-4\">";
                                            echo "<div class=\"card\">";
                                                echo "<img src=\"assets/slides/slide-img-01.jpg\" class=\"card-img-top\" alt=\"test\">";
                                                echo "<div class=\"card-body\">";
                                                    echo "<h5 class=\"card-title\">".$categorie->designation."</h5>";
                                                    echo "<p class=\"card-text\">L'ensemble des écoles de la catégorie \"".$categorie->designation."\""."</p>";
                                                    echo "<a href=\"".BASE_URL."/categorie/show/".$categorie->id."\" class=\"btn btn-primary\">Détails</a>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>