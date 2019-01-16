                <div class="col-xs-12 col-md-10">
                    <div class="main-content">
                        <h2>Formation <?php echo $categorie->designation ?></h2>
                        <input class="form-control search-input" id="search-input" type="text" placeholder="Filtrer...">
                        <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#create">
                            <i class="far fa-plus-square"></i>
                            <span>Ajouter</span>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <?php
                                        echo  '<form class="create-area" action="'.BASE_URL.'/ecole/create" method="post">';
                                    ?>
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Création d'une école</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nom" class="form-control" required>
                                                </div>
                                            </div>
                                            <?php
                                                if ($categorie->id==5||$categorie->id==6) {
                                                    echo '<div class="form-group row">';
                                                        echo '<label class="col-sm-2 col-form-label">Domaine</label>';
                                                        echo '<div class="col-sm-10">';
                                                            echo '<input type="text" name="domaine" class="form-control" required>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                }
                                            ?>                    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Wilaya</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="wilaya" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Commune</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="commune" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Adresse</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="adresse" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Téléphone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="telephone" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Fax</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="fax" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" name="enligne" class="form-check-input" checked>
                                                <label class="form-check-label" >Mise en ligne</label>
                                            </div>
                                            <?php 
                                                echo '<input type="text" name="id_categorie" value="'.$id_categorie.'" hidden>';
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-success">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <?php 
                                            if ($ecoles[0]->domaine!=null) {
                                                echo '<th scope="col">Domaine</th>';
                                            }
                                        ?>
                                        <th scope="col">Wilaya</th>
                                        <th scope="col">Commune</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Téléphone</th>
                                        <th scope="col">Fax</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($ecoles as $ecole) {
                                            echo "<tr>";
                                                echo "<th scope=\"row\">".$ecole->nom."</th>";
                                                if ($ecole->domaine!=null) {
                                                    echo "<td>".$ecole->domaine."</td>";
                                                } 
                                                echo '<td>'.$ecole->wilaya.'</td>';
                                                echo '<td>'.$ecole->commune.'</td>';
                                                echo '<td>'.$ecole->adresse.'</td>';
                                                echo '<td>'.$ecole->telephone.'</td>';
                                                echo '<td>'.$ecole->fax.'</td>';
                                                echo '<td>';
                                                    echo '<a class="btn btn-primary" href="'.BASE_URL.'/commentaire/index/'.$ecole->id.'" role="button">';
                                                        echo '<i data-feather="message-square"></i>';
                                                        echo '<span>Commenter</span>';
                                                    echo '</a>';

                                                    echo '<br>';

                                                    echo '<!-- Button trigger modal -->';
                                                    echo '<a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#update'.$ecole->id.'">';
                                                        echo '<i class="far fa-edit"></i>';
                                                        echo '<span>Modifier</span>';
                                                    echo '</a>';

                                                    echo '<!-- Modal -->';
                                                    echo '<div class="modal fade" id="update'.$ecole->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                                        echo '<div class="modal-dialog" role="document">';
                                                            echo '<div class="modal-content">';
                                                                echo '<form class="update-area" action="'.BASE_URL.'/ecole/update" method="post">';
                                                                    echo '<div class="modal-header">';
                                                                        echo '<h5 class="modal-title" id="exampleModalLabel">Modification de l\'école ...</h5>';
                                                                        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                                        echo '<span aria-hidden="true">&times;</span>';
                                                                        echo '</button>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-body">';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Code</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="id" class="form-control" value="'.$ecole->id.'" readonly required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Nom</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="nom" class="form-control" value="'.$ecole->nom.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        if ($categorie->id==5||$categorie->id==6) {
                                                                            echo '<div class="form-group row">';
                                                                                echo '<label class="col-sm-2 col-form-label">Domaine</label>';
                                                                                echo '<div class="col-sm-10">';
                                                                                    echo '<input type="text" name="domaine" class="form-control" value="'.$ecole->domaine.'" required>';
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        }
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Wilaya</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="wilaya" class="form-control" value="'.$ecole->wilaya.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Commune</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="commune" class="form-control" value="'.$ecole->commune.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Adresse</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="adresse" class="form-control" value="'.$ecole->adresse.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Téléphone</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="telephone" class="form-control" value="'.$ecole->telephone.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Fax</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="fax" class="form-control" value="'.$ecole->fax.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group form-check">';
                                                                            if ($ecole->enligne==1) {
                                                                                echo '<input type="checkbox" name="enligne" class="form-check-input" checked>';
                                                                            }
                                                                            else {
                                                                                echo '<input type="checkbox" name="enligne" class="form-check-input">';

                                                                            }                                                                            
                                                                            echo '<label class="form-check-label" >Mise en ligne</label>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-footer">';
                                                                        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>';
                                                                        echo '<button type="submit" class="btn btn-primary">Sauvegarder</button>';
                                                                    echo '</div>';
                                                                echo '</form>';
                                                            echo '</div>';
                                                        echo '</div>';
                                                    echo '</div>';

                                                    echo '<br>';

                                                    echo '<!-- Button trigger modal -->';
                                                    echo '<a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete'.$ecole->id.'">';
                                                        echo '<i class="far fa-trash-alt"></i>';
                                                        echo '<span>Supprimer</span>';
                                                    echo '</a>';
                                                    echo '<!-- Modal -->';
                                                    echo '<div class="modal fade" id="delete'.$ecole->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                                        echo '<div class="modal-dialog" role="document">';
                                                            echo '<div class="modal-content">';
                                                                echo '<form class="delete-area" action="'.BASE_URL.'/ecole/destroy" method="post">';
                                                                    echo '<div class="modal-header">';
                                                                        echo '<h5 class="modal-title" id="exampleModalLabel">Suppression de l\'école '.$ecole->nom.'</h5>';
                                                                        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                                        echo '<span aria-hidden="true">&times;</span>';
                                                                        echo '</button>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-body">';
                                                                        echo '<input type="text" name="id" value="'.$ecole->id.'" hidden>';
                                                                        echo '<p>Vous êtes sur le point de supprimer l\'école '.$ecole->nom.'</p>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-footer">';
                                                                        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>';
                                                                        echo '<button type="submit" class="btn btn-danger">Supprimer</button>';
                                                                    echo '</div>';
                                                                echo '</form>';
                                                            echo '</div>';
                                                        echo '</div>';
                                                    echo '</div>';

                                                echo '</td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>