<?php 
	if(isset($_POST['submit'])){
		$newFurniture = new FurnitureController();
		$newFurniture->addFurniture();

	}
?>
<?php require './views/includes/header.php'; ?>
<div class="container" style="margin-right: 0px; margin-top:8%;  margin-bottom:8%;">
  <div class="row my-4">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header text-center"><a href="<?php echo BASE_URL;?>newarrivel" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>Ajouter un furniture</div>
        <div>
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">name*</label>
              <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
              <label for="prix">prix*</label>
              <input type="text" name="prix" class="form-control" placeholder="prix">
            </div>
            <div class="form-group">
              <label for="image">image*</label>
              <input type="file" name="image" id="image" class="form-control" placeholder="image">
            </div>
            <!-- <div class="form-group">
              <select class="form-control" name="statut">
                <option value="1">Active</option>
                <option value="0">Résilié</option>
              </select>
            </div> -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="submit">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
