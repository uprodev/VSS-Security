<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between">
					<div class="text col-lg-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label"><span></span><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>
						
						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>
						
						<?php if ($button || $normal_link): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">

								<?php if ($button): ?>
									<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php endif ?>

								<?php if ($normal_link): ?>
									<a href="<?= $normal_link['url'] ?>" class="link"<?php if($normal_link['target']) echo ' target="_blank"' ?>><?= $normal_link['title'] ?> <i class="fa-regular fa-arrow-right"></i></a>
								<?php endif ?>

							</div>
						<?php endif ?>
						
					</div>

					<?php 
					$is_video = $video_image == 'Video' && $desktop_video;
					$is_image = $video_image == 'Image' && $desktop_image;
					?>

					<?php if ($is_video || $is_image): ?>
						<figure class="col-lg-5 col-12">

							<?php if ($is_video): ?>
								<a data-fancybox href="<?= $desktop_video ?>">
								<?php endif ?>

								<?php if ($desktop_image): ?>
									<?= wp_get_attachment_image($desktop_image['ID'], 'full') ?>
								<?php endif ?>

								<?php if ($is_video): ?>
									<span class="icon-wrap"><i class="fa-regular fa-play"></i></span>
								</a>
							<?php endif ?>
							
							<span class="after-left-45"></span>
						</figure>
					<?php endif ?>
					
				</div>

				<?php if ($cards): ?>
					<div class="bottom p-0">
						<div class="swiper slider-3x">
							<div class="swiper-wrapper">

								<?php foreach ($cards as $item): ?>
									<div class="swiper-slide">

										<?php if ($item['link'] && $item['link']['url'] != '#'): ?>
											<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
											<?php else: ?>
												<a class="no-link">
												<?php endif ?>

												<?php if ($item['icon'] || ($item['link'] && $item['link']['title'])): ?>
													<h6>

														<?php if ($item['icon']): ?>
															<i class="<?= $item['icon'] ?>"></i>
														<?php endif ?>

														<?php if ($item['link'] && $item['link']['title']): ?>
															<?= $item['link']['title'] ?>
														<?php endif ?>

													</h6>
												<?php endif ?>

												<?= $item['text'] ?>

												<?php if ($item['link'] && $item['link']['url'] != '#'): ?>
													<span class="arrow-45">
														<span class="wrap-arrow"></span>
														<i class="fa-regular fa-arrow-right"></i>
													</span>
												<?php endif ?>
												
											</a>
										</div>
									<?php endforeach ?>

								</div>
							</div>

							<?php if (count($cards) > 3): ?>
								<div class="swiper-button-next next-3x"><i class="fa-regular fa-arrow-right"></i></div>
								<div class="swiper-button-prev prev-3x"><i class="fa-regular fa-arrow-left"></i></div>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>
			</div>
		</section>

		<?php endif; ?>