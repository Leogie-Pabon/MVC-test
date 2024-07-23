<div class="col-md-4 mb-5" style="width: 360px;margin-top: -20px;">
	<div class="iphone-item h-100 d-flex flex-column">
		<div class="fs-1 mb-1 img-container text-center  align-items-center justify-content-center" style="margin-top: 10px;">
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
					<img class="img-fluid w-80 rounded" src="<?php echo URL; ?>public/images/<?php echo $src; ?>" alt="<?php echo $iphone['name']; ?>">
				</a>
			</div>
		</div>
		<div class="text-body pb-5 d-flex flex-column flex-grow-1" style="margin-left: 10px; margin-right: 10px">
			<h4 class="fs-4 mb-4 fs-2 primary-color" style="margin-top: -70px;">
				<a class="text-reset text-decoration-none" href="<?php echo URL; ?>iphone/<?php echo $iphone['iphone_id'];?>">
					<?php echo $iphone["name"]; ?>
				</a>
			</h4>
			<h4 class="secondary-font fs-6 mb-4" style="margin-top: -20px;">
				<a class="text-reset text-decoration-none" href="<?php echo URL; ?>search?query=<?php echo $iphone["processor"]; ?>">
					<?php echo $iphone["processor"]; ?>	
				</a>
			</h4>
			<div class="description mb-3 border-top pt-1 flex-grow-1" style="margin-top: -10px;">
				<p class="lh-lg">
					<?php echo $iphone["description"]; ?>
				</p>
			</div> 
			<div class="iphone-ctgs" style="margin-top:-15px; margin-bottom: -30px">
				Categories :
				<?php 
				$bk_cats = explode(",",$iphone["categories"]);
				foreach($bk_cats as $bk_cat):
					?>
					<span>
						<a class="btn btn-outline-secondary btn-sm mb-2" href="<?php echo URL; ?>search?query=<?php echo $bk_cat; ?>">
								<?php echo $bk_cat; ?>	
						</a>
					</span>
				<?php endforeach; ?>
			</div>								
		</div>
	</div>
</div>