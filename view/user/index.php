                <div class="col-xs-12 col-md-10">
                    <div class="main-content">
                        <h2>Les membres du site</h2>
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
                                        echo  '<form class="create-area" action="'.BASE_URL.'/user/create" method="post">';
                                    ?>
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Création d'un membre</h5>
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
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Prénom</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="prenom" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom d'utilisateur</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="username" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Grade</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="grade" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Le code de l'école</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="id_ecole" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" name="permission" class="form-check-input" checked>
                                                <label class="form-check-label">Permission pour faire les commentaires</label>
                                            </div>
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
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Nom d'utilisateur</th>
                                        <th scope="col">Mot de passe</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Permission</th>
                                        <th scope="col">Code de l'école</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($users as $usr) {
                                            echo "<tr>";
                                                echo "<th scope=\"row\">".$usr->nom."</th>";
                                                echo '<td>'.$usr->prenom.'</td>';
                                                echo '<td>'.$usr->username.'</td>';
                                                echo '<td>'.$usr->password.'</td>';
                                                echo '<td>'.$usr->grade.'</td>';
                                                if ($usr->permission==1) {
                                                	echo '<td>Oui</td>';                                                	
                                                }
                                                else {
                                                	echo '<td>Non</td>';
                                                }                                                
                                                echo '<td>'.$usr->id_ecole.'</td>';
                                                echo '<td>';

                                                echo '<!-- Button trigger modal -->';
                                                    echo '<a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#update'.$usr->id.'">';
                                                        echo '<i class="far fa-edit"></i>';
                                                        echo '<span>Modifier</span>';
                                                    echo '</a>';

                                                    echo '<!-- Modal -->';
                                                    echo '<div class="modal fade" id="update'.$usr->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                                        echo '<div class="modal-dialog" role="document">';
                                                            echo '<div class="modal-content">';
                                                                echo '<form class="update-area" action="'.BASE_URL.'/user/update" method="post">';
                                                                    echo '<div class="modal-header">';
                                                                        echo '<h5 class="modal-title" id="exampleModalLabel">Modification de l\'école ...</h5>';
                                                                        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                                        echo '<span aria-hidden="true">&times;</span>';
                                                                        echo '</button>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-body">';
                                                                        echo '<input type="text" name="id" value="'.$usr->id.'" hidden>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Nom</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="nom" class="form-control" value="'.$usr->nom.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">prenom</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="prenom" class="form-control" value="'.$usr->prenom.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Nom d\'utilisateur</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="username" class="form-control" value="'.$usr->username.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Mot de passe</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="password" class="form-control" value="'.$usr->password.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Grade</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="grade" class="form-control" value="'.$usr->grade.'" required>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group row">';
                                                                            echo '<label class="col-sm-2 col-form-label">Code de l\'école</label>';
                                                                            echo '<div class="col-sm-10">';
                                                                                echo '<input type="text" name="id_ecole" class="form-control" value="'.$usr->id_ecole.'">';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="form-group form-check">';
                                                                            if ($usr->permission==1) {
                                                                                echo '<input type="checkbox" name="permission" class="form-check-input" checked>';
                                                                            }
                                                                            else {
                                                                                echo '<input type="checkbox" name="permission" class="form-check-input">';
                                                                            }                                                                            
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
                                                    echo '<a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete'.$usr->id.'">';
                                                        echo '<i class="far fa-trash-alt"></i>';
                                                        echo '<span>Supprimer</span>';
                                                    echo '</a>';
                                                    echo '<!-- Modal -->';
                                                    echo '<div class="modal fade" id="delete'.$usr->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                                        echo '<div class="modal-dialog" role="document">';
                                                            echo '<div class="modal-content">';
                                                                echo '<form class="delete-area" action="'.BASE_URL.'/user/destroy" method="post">';
                                                                    echo '<div class="modal-header">';
                                                                        echo '<h5 class="modal-title" id="exampleModalLabel">Suppression du membre '.$usr->nom.'</h5>';
                                                                        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                                        echo '<span aria-hidden="true">&times;</span>';
                                                                        echo '</button>';
                                                                    echo '</div>';
                                                                    echo '<div class="modal-body">';
                                                                        echo '<input type="text" name="id" value="'.$usr->id.'" hidden>';
                                                                        echo '<p>Vous êtes sur le point de supprimer le membre '.$usr->nom.' '.$usr->prenom.'</p>';
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