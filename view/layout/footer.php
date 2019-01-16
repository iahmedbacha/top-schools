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

    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/jquery-3.3.1.js"."\""; ?>></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/popper.min.js"."\""; ?>></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/bootstrap.min.js"."\""; ?>></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript" src=<?php echo "\"".BASE_URL."/public/js/script.js"."\""; ?>></script>
</body>
</html>