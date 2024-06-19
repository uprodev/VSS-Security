<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="step-slider-section only-slider mb-0 blog-slider-wrap"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="wrap-content">
			<div class="container">
				<div class="row">
					<div class="content">
						<div class="top p-0 d-flex justify-content-between flex-wrap">
							<div class="title-wrap">

								<?php if ($subtitle): ?>
									<h6 class="label-red"><span></span><?= $subtitle ?></h6>
								<?php endif ?>

								<?php if ($title): ?>
									<h2><?= $title ?></h2>
								<?php endif ?>

								<?= $description ?>

							</div>

							<?php if ($button): ?>								
								<div class="btn-wrap">
									<a href="<?= $button['url'] ?>" class="btn-border btn-border-white h-54"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <i class="fa-regular fa-arrow-right"></i></a>
								</div>
							<?php endif ?>

						</div>

						<?php $posts = $custom_default == 'Custom' ? $custom : get_posts(array('post_type' => 'nieuws', 'posts_per_page' => 10)) ?>

						<?php if ($posts): ?>
							<div class="slider-wrap p-0">
								<div class="swiper blog-slider">
									<div class="swiper-wrapper">

										<?php 
										foreach ($posts as $post):
											global $post;
											setup_postdata($post); 
											?>

											<div class="swiper-slide">
												<figure>

													<?php if ($field = get_field('card_label')): ?>
														<div class="label-blog"><?= $field ?></div>
													<?php endif ?>
													
													<?php the_post_thumbnail('full') ?>

												</figure>
												<div class="text">

													<?php $terms =  wp_get_object_terms(get_the_ID(), 'nieuws_cat') ?>

													<?php if ($terms): ?>
														<?php foreach ($terms as $term): ?>
															<p class="category"><?= $term->name ?></p>
														<?php endforeach ?>
													<?php endif ?>
													
													<?php if ($field = get_field('card_title')): ?>
														<h5 class="title"><?= $field ?></h5>
													<?php endif ?>
													
													<?php the_excerpt() ?>

													<div class="arrow-wrap">
														<a href="<?php the_permalink() ?>"><i class="fa-solid fa-arrow-right"></i></a>
													</div>
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
										<div class="swiper-button-next blog-next"><i class="fa-solid fa-arrow-right"></i></div>
										<div class="swiper-button-prev blog-prev"><i class="fa-solid fa-arrow-left"></i></div>
									</div>
									<div class="p-wrap d-flex align-items-center">
										<div class="swiper-pagination blog-pagination"></div>
									</div>
								</div>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>