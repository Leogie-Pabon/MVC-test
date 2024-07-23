<?php include "views/includes/header.php"; ?>
<main>
	
	<div class="featured mt-5">
		<div class="container">
			<div class="row gx-5">
				<div style="padding-left: 5%;">
					<h2 class="primary-font secondary-font primary-color mb-4"><img src="<?php echo URL; ?>public/images/letter-b.png" alt="ribbon" class="me-3" width="80"><img src="<?php echo URL; ?>public/images/letter-s.png" alt="ribbon" class="me-3" width="80"><img src="<?php echo URL; ?>public/images/letter-u.png" alt="ribbon" class="me-3" width="80">Benguet State University Disbursement System</h2>
					
				</div>
				
			</div>
		</div>
		<center>
		<?php if(isset($_SESSION["user"]) && $_SESSION["user"]["type"] == "administrator"): ?>
                   
		<div class="text-center">
								<a href="<?php echo URL; ?>admin/dashboard" class="btn btn-warning btn mt-3"><i class="bi bi-tags-fill" class="me-1"></i>Dashboard</a>
							</div>
                    
                <?php endif; ?>
				<br>
				<br>
			
			<?php if(isset($_SESSION["user"])): ?>
						<a href="<?php echo URL; ?>iphone/add" class="btn btn-primary"><i class="bi bi-iphone-half me-1"></i> Make Voucher Request</a>
					
			<?php endif; ?>
		
</center>
	</div>

	<!--qweqweqweqeqwe-->
	


	<div class="categories-section py-5" id="categories" >
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-5">
					<h2 class="primary-font text-white mb-4 text-shadow fs-1">Categories</h2>
					<div class="accordion" id="accordionExample">
						<?php foreach($categories as $category):?>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $category['category_id']; ?>" aria-expanded="true" aria-controls="collapseOne">
										<?php echo $category["category_name"]; ?>
									</button>
								</h2>
								<div id="collapse-<?php echo $category['category_id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										


										<?php if(isset($_SESSION["user"]) && $_SESSION["user"]["type"] == "administrator"): ?>
											<div class="ctg-btns d-flex align-items-center justify-content-end">
												<a  href="category/<?php echo $category['category_id']; ?>/edit" class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Update</a>
												
												<button type="button" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover btn btn-link" data-bs-toggle="modal" data-bs-target="#cat-del-<?php echo $category['category_id']; ?>">Delete</buttton>
													
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div> 


								<!-- Categories Delete Modal -->
								<div class="modal fade" id="cat-del-<?php echo $category['category_id']; ?>" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header  custom-bg-primary text-white">
												<h1 class="modal-title fs-5">Confirmation</h1>
												<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												Delete category <?php echo $category["category_name"]; ?>?
												<form action="<?php echo URL;?>category/delete" method="POST" class="d-inline-block" id="cat-del-form-<?php echo $category['category_id']; ?>">
													<input type="hidden" name="category_id" value="<?php echo $category['category_id'];?>">
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary" form="cat-del-form-<?php echo $category['category_id']; ?>">Delete</button>
											</div>
										</div>
									</div>
								</div>
								<!-- End Categories Delete Modal -->

							<?php endforeach; ?>
						</div>

						<?php if(isset($_SESSION["user"]) && $_SESSION["user"]["type"] == "administrator"): ?>
							<div class="text-center">
								<a href="<?php echo URL; ?>category/add" class="btn btn-warning btn mt-3"><i class="bi bi-tags-fill" class="me-1"></i> Add a Category</a>
							</div>
						<?php endif; ?>
					</div>

				</div>
				

				
			</div>
		</div>
	</div>

</main>



<?php
include 'views/includes/footer.php';
?>
