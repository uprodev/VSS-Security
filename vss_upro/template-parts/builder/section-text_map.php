<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-map"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">
					<div class="text">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h3><?= $title ?></h3>
						<?php endif ?>

						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>

						<?php if ($button): ?>
							<div class="btn-wrap">
								<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
							</div>
						<?php endif ?>

					</div>

					<div class="map-wrap">
						
						<?php if ($circle_text): ?>
							<div class="text-circle">
								<span><?= $circle_text ?></span>
							</div>
						<?php endif ?>

						<?php if ($image_mapper): ?>
							<?= wp_get_attachment_image($image_mapper['ID'], 'full', false, array('class' => 'map')) ?>
						<?php endif ?>

						<?php if ($texts): ?>
							<?php foreach ($texts as $index => $item): ?>
								<div class="item item-<?= $index + 1 ?>">
									<a href="#text-<?= $index + 1 ?>" class="fancybox"><i class="fa-solid fa-location-dot"></i></a>
								</div>

								<?php if ($item['title'] || $item['text']): ?>
									<div id="text-<?= $index + 1 ?>" class="mini-popup-text" style="display:none;">
										<div class="popup-main">

											<?php if ($item['title']): ?>
												<h6><?= $item['title'] ?></h6>
											<?php endif ?>

											<?= $item['text'] ?>

										</div>
									</div>
								<?php endif ?>

							<?php endforeach ?>
							
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>