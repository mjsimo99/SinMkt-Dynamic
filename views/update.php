<?php 
	if (isset($_POST['id'])) {
		$existFurniture = new FurnitureController();
		$furniture = $existFurniture->getOneFurniture();
 	}
	if(isset($_POST['submit'])){
		$existFurniture = new FurnitureController();
		$existFurniture->updateFurniture();
	}
?>
<?php require './views/includes/header.php'; ?>


<div class="container" style="margin-right: 0px; margin-top:4%;  margin-bottom:6%;">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header text-center"><a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>Modifier un employé</div>
				<div class="card-body bg-light">

					<form method="post" enctype="multipart/form-data">
					<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $furniture->id;?>">
						</div>
						<div class="form-group">
							<label for="name">name*</label>
							<input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $furniture->name; ?>">
						</div>
						<div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="prix" class="form-control" placeholder="Prix"
							value="<?php echo $furniture->prix; ?>"
							>
						</div>
						<div class="form-group">
							<label for="image">image*</label>
							<input type="file" name="image" class="form-control" placeholder="image" >


						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
