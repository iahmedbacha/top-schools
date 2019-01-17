<?php
	echo '<option value="">Select a school</option>';
    foreach ($ecoles as $ecole) {
    	echo '<option value="'.$ecole->id.'">'.$ecole->nom.'</option>';
    }
?>