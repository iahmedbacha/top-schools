<?php
    foreach ($ecoles as $ecole) {
    	echo '<option value="'.$ecole->id.'">'.$ecole->nom.'</option>';
    }
?>