<!-- Formations array -->
        <thead class="thead-light">
            <tr>
                <th scope="col">Formations</th>
                <th scope="col">Volume horaire (H)</th>
                <th scope="col">Prix HT (DA)</th>
                <th scope="col">Taxe (%)</th>
                <th scope="col">Prix TTC (DA)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($typeFormation as $type) {
                	foreach ($formations as $formation) {
                		if ($formation->id_type==$type->id) {
                			echo '<tr>';
                                echo '<th>'.$formation->designation.'</th>';
                                echo '<td>'.$formation->vol_hor.'</td>';
                                echo '<td class="ht">'.$formation->prix_ht.'</td>';
                                echo '<td class="taxe">'.$formation->taxe.'</td>';
                                echo '<td class="ttc"></td>';
                            echo '</tr>';
                		}
                	}
                }
            ?>
        </tbody>
<!-- End Formations array -->