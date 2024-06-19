<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php $posts = $custom_default == 'Custom' ? $custom : get_posts(array('post_type' => 'referentie', 'posts_per_page' => 5)) ?>

	<?php if ($posts): ?>
		<section class="references"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row">
					<div class="content d-flex justify-content-between flex-wrap">

						<?php if ($image): ?>
							<figure class="col-lg-6 col-12">
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
								<span class="after-left-45 after-left-45-big"></span>
							</figure>
						<?php endif ?>

						<div class="text col-lg-6 col-12">
							<div class="slider-wrap">
								<div class="swiper references-slider">
									<div class="swiper-wrapper">

										<?php 
										foreach ($posts as $post):
											global $post;
											setup_postdata($post); 
											?>
											<div class="swiper-slide">

												<?php if ($field = get_field('subtitle')): ?>
													<h6 class="label-red"><span></span><?= $field ?></h6>
												<?php endif ?>
												
												<?php if ($field = get_field('title')): ?>
													<h4><?= $field ?></h4>
												<?php endif ?>
												
												<?php if ($field = get_field('card_description')): ?>
													<div class="text-wrap"><?= $field ?></div>
												<?php endif ?>
												
												<div class="logo-wrap">

													<?php if ($field = get_field('logo')): ?>
														<div class="logo">
															<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
																<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
															<?php else: ?>
																<?= wp_get_attachment_image($field['ID'], 'full') ?>
															<?php endif ?>
														</div>
													<?php endif ?>

													<div class="name">

														<?php if ($field = get_field('name')): ?>
															<p><?= $field ?></p>
														<?php endif ?>

														<?php if ($field = get_field('function')): ?>
															<p><?= $field ?></p>
														<?php endif ?>

													</div>
												</div>
											</div>
											<?php 
										endforeach;
										wp_reset_postdata(); 
										?>
										
									</div>
								</div>
								<div class="nav-wrap">
									<div class="swiper-button-next references-next"><i class="fa-solid fa-arrow-right"></i></div>
									<div class="swiper-button-prev references-prev"><i class="fa-solid fa-arrow-left"></i></div>
								</div>
							</div>
						</div>
						<div class="bottom">
							<ul class="d-flex flex-wrap">

								<?php 
								foreach ($posts as $index => $post):
									global $post;
									setup_postdata($post); 
									?>
									<li <?php if($index == 0) echo ' class="is-active"' ?>>

										<?php if ($field = get_field('logo_white')): ?>
											<a href="#">
												<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
													<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
												<?php else: ?>
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												<?php endif ?>
											</a>
										<?php endif ?>

									</li>
									<?php 
								endforeach;
								wp_reset_postdata(); 
								?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>