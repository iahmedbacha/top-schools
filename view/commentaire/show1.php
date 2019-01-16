                	<?php 
                		foreach ($commentaires as $commentaire) {
                			echo '<li class="list-group-item">';
                				echo '<div class="comment">';
                					echo '<div class="commenter-image"></div>';
                					echo '<div class="commenter-text">';
                						echo '<div class="header-infos">';
                							echo '"<span class="commenter-name">'.$commentaire->nom.' '.$commentaire->prenom.'</span>';
                							echo '<span class="comment-time">11:10 a.m</span>';
                						echo '</div>';
                						echo '<p>'.$commentaire->contenu.'</p>';
                					echo '</div>';
                				echo '</div>';
                			echo "</li>";
                		}
                	?>