<?php 
	if (isset($_POST['id'])) {
		$exitFurniture = new FurnitureController();
		$exitFurniture->deleteFurniture();
 	}
?>
