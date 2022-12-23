<?php
    $data = new FurnitureController();
    $furnitures = $data->getAllFurniture();  
?>



<?php require './views/includes/header.php'; ?>


            <!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>new arrivals</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">

                    <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){   ?>

                    <div class="container bg-dark">
                        <div class="row my-4">
                                <div class="card" style="margin-bottom: 3%; text-align: center;">
                                        <a href="<?php echo BASE_URL; ?>add">
                                            <i class="fa fa-plus" style="padding: 20px; margin-bottom: 10px; background-color: #383F42; color:#EDEAE8; border-radius: 10px;"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <?php }  ?>


                    <?php foreach($furnitures as $furniture):?>
						<div class="col-md-3 col-sm-4">
                            
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<!-- <img src="../../Satoru-MVC1/views/assets/images/collection/arrivals2.png" alt="arrivals2"> -->
                                    <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($furniture["image"]) .'" />'; ?>



									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-3">
                                    <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){   ?>

                                        <form method="post" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $furniture['id'];?>">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                        </form>
                                        <form method="post" class="mr-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $furniture['id'];?>">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                        </form>
                                        <?php  } ?>
									</div>
									
								</div>
								<h4><a href="#"><?php echo $furniture['name'];?></a></h4>
								<p class="arrival-product-price"><?php echo $furniture['prix'];?></p>
                                
							</div>
						</div>
                    <?php endforeach;?>
						</div>
					</div>
				</div>


			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->
