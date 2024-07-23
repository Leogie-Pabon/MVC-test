<?php include 'views/includes/header.php'; ?>

<main>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-4">
				<h1 class="primary-font text-center my-4 primary-color">Update a iphone</h1>

				<div class="img-container text-center mb-5 d-flex align-items-center justify-content-center">
					<?php 

					$src = "";
					if(!is_null($iphone["image"])){
						$src = $iphone["image"];
					} else {
						$src = "no-image.png";
					}

					?>
					<div>
						<a href="<?php echo URL; ?>iphone/<?php echo $iphone['iphone_id'];?>">
							<img class="img-fluid w-60" src="<?php echo URL; ?>public/images/<?php echo $src; ?>" alt="<?php echo $iphone['name']; ?>">
						</a>
					</div>
				</div>
				<form method="POST" action="<?php echo URL; ?>iphone/update" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $iphone["name"]; ?>" required>
					</div>
					<div class="mb-3">
						<label for="processor" class="form-label">Processor</label>
						<input type="text" class="form-control" id="processor" name="processor" value="<?php echo $iphone["processor"]; ?>" required>
					</div>
					<div class="mb-3">
						<label for="description" class="form-label">Description</label>
						<textarea class="form-control" id="description" rows="5" name="description" required><?php echo $iphone["description"]; ?></textarea>
					</div>
					<div class="mb-3">
						<label for="iphone-image" class="form-label">Image</label>
						<input class="form-control" type="file" id="iphone-image" name="image">
					</div>
					<div class="mb-3">
						<label for="">Categories</label>
						<?php 
						$iphone_categories = explode(",",$iphone["categories"]);
						foreach($categories as $category): ?>
							<div class="form-check mt-2"> 
								<input 
								<?php if(in_array($category["category_name"],$iphone_categories)):?> checked <?php endif; ?>
								class="form-check-input" type="checkbox" value="<?php echo $category['category_id'];?>" id="cat-<?php echo $category['category_id'];?>" name="category[]">
								<label class="form-check-label" for="cat-<?php echo $category['category_id'];?>">
									<?php echo $category['category_name'];?>
								</label>
							</div>
						<?php endforeach; ?>
						<div class="text-center pt-3">
							<input type="hidden" name="id" value="<?php echo $iphone['iphone_id']; ?>">
							<button type="submit" class="btn btn-primary">Save</button>
							<a href="<?php echo URL; ?>home" class="btn btn-danger">Exit</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<?php include 'views/includes/footer.php'; ?>
