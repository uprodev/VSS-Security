<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="cases mt-150"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between align-items-center">
					<div class="text">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h2><?= $title ?></h2>
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


					<?php $posts = $custom_default_cards == 'Custom' ? $custom : get_posts(array('post_type' => 'referentie', 'posts_per_page' => 6)) ?>

					<?php if ($posts): ?>
						<div class="slider-wrap">
							<div class="swiper cases-slider">
								<div class="swiper-wrapper">

									<?php 
									foreach ($posts as $post):
										global $post;
										setup_postdata($post); 
										?>

										<div class="swiper-slide">
											<div class="user-wrap">

												<?php if ($field = get_field('card_photo')): ?>
													<figure>
														<?= wp_get_attachment_image($field['ID'], 'full') ?>
													</figure>
												<?php endif ?>

												<div class="user-text">

													<?php if ($field = get_field('name')): ?>
														<h6><?= $field ?></h6>
													<?php endif ?>

													<?php if ($field = get_field('function')): ?>
														<p><?= $field ?></p>
													<?php endif ?>

												</div>
											</div>
											<div class="text-wrap">

												<?php if ($field = get_field('title')): ?>
													<h5 class="title"><?= $field ?></h5>
												<?php endif ?>

												<?php the_field('card_description') ?>

											</div>
										</div>
										<?php 
									endforeach;
									wp_reset_postdata(); 
									?>

								</div>
							</div>
							<div class="nav-wrap d-flex justify-content-between flex-wrap fd">
								<div class="wrap d-flex justify-content-between">
									<div class="swiper-button-next cases-next"><i class="fa-solid fa-arrow-right"></i></div>
									<div class="swiper-button-prev cases-prev"><i class="fa-solid fa-arrow-left"></i></div>
								</div>
								<div class="p-wrap d-flex align-items-center">
									<div class="swiper-pagination cases-pagination"></div>
								</div>
							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>