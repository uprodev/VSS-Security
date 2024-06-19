<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($cards): ?>
		<section class="img-slider-wrap<?php if($background_color == 'Grey') echo ' bg-grey' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row">
					<div class="content">
						<div class="top">

							<?php if ($title): ?>
								<h3><?= $title ?></h3>
							<?php endif ?>

							<?= $description ?>

						</div>
						<div class="slider-wrap">
							<div class="swiper-button-next img-next"><i class="fa-solid fa-arrow-right"></i></div>
							<div class="swiper-button-prev img-prev"><i class="fa-solid fa-arrow-left"></i></div>
							<div class="swiper img-slider">
								<div class="swiper-wrapper">

									<?php foreach ($cards as $item): ?>
										<div class="swiper-slide">
											<div class="wrap">

												<?php if ($item['image']): ?>
													<figure>
														<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
													</figure>
												<?php endif ?>
												
												<div class="text">

													<?php if ($item['title']): ?>
														<h6><?= $item['title'] ?></h6>
													<?php endif ?>

													<?= $item['card_description'] ?>

												</div>
											</div>
										</div>
									<?php endforeach ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>