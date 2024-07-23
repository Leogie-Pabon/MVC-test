<?php include 'views/includes/header.php'; ?>

<main>
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-4">
		

			<h1 class="primary-font text-center my-4 primary-color">Make a Request</h1>

			<form method="POST" action="<?php echo URL; ?>iphone/insert" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="firstname" class="form-label">firstname</label>
				<input type="text" class="form-control" id="firstname" name="firstname" required>
			</div>
			<div class="mb-3">
				<label for="lastname" class="form-label">lastname</label>
				<input type="text" class="form-control" id="lastname" name="lastname" required>
			</div>
			<div class="mb-3">
				<label for="natureofrequest" class="form-label">Nature of Request</label>
				<textarea class="form-control" id="natureofrequest" rows="5" name="natureofrequest" required></textarea>
			</div>
			<div class="mb-3">
				<label for="natureofrequest" class="form-label">Position</label>
				<textarea class="form-control" id="position" name="position" required></textarea>
			</div>

			<div class="mb-3">
				<label for="">Category</label>
				<?php foreach($categories as $category): ?>
				<div class="form-check mt-2"> 
					<input class="form-check-input" type="checkbox" value="<?php echo $category['category_id'];?>" id="cat-<?php echo $category['category_id'];?>" name="category[]">
					<label class="form-check-label" for="cat-<?php echo $category['category_id'];?>">
					<?php echo $category['category_name'];?>
					</label>
					
				</div>
				<?php endforeach; ?>
			</div>
			
			
			<div class="mb-3">
				<label for="gmail" class="form-label">Email Address</label>
				<input type="text" class="form-control" id="gmail" name="gmail" required>
			</div>
			<div class="mb-3">
				<label for="amount" class="form-label">Amount</label>
				<input type="text" class="form-control" id="amount" name="amount" required>
			</div>
			<div class="text-center pt-3">
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
			</form>
		</div>
	 </div>
</div>
</main>

<?php include 'views/includes/footer.php'; ?>
