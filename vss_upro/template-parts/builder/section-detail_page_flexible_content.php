<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($flexible_content): ?>
		<section class="default-text"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row">

					<?php 
					switch ($horizontal_spacing) {
						case 'Normal width':
						$width = 'col-lg-10';
						break;

						default:
						$width = 'col-lg-12';
						break;
					}
					?>

					<div class="content col-12 <?= $width ?>">

						<?php 
						foreach ($flexible_content as $item):

							switch ($item['acf_fc_layout']) {

								case 'text_block':
								?>

								<?php if ($item['title']): ?>
									<<?= $item['h2_h3'] ?>><?= $item['title'] ?></<?= $item['h2_h3'] ?>>
								<?php endif ?>

								<?= $item['text'] ?>

								<?php 
								break;

								case 'quote_block':
								?>

								<div class="quote-block d-flex flex-wrap justify-content-between">

									<?php if ($item['image']): ?>
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										</figure>
									<?php endif ?>
									
									<?php if ($item['icon']): ?>
										<div class="icon-wrap">
											<i class="<?= $item['icon'] ?>"></i>
										</div>
									<?php endif ?>
									
									<div class="text">

										<?php if ($item['quote']): ?>
											<blockquote><?= $item['quote'] ?></blockquote>
										<?php endif ?>

										<?php if ($item['text']): ?>
											<p><?= $item['text'] ?></p>
										<?php endif ?>

									</div>
								</div>

								<?php 
								break;

								case 'multi_step_form_block':
								?>

								<div class="form-wrap">

									<?php if ($item['title']): ?>
										<h4><?= $item['title'] ?></h4>
									<?php endif ?>

									<?= $item['description'] ?>

									<?php if ($item['multi_step_form']): ?>
										<?= do_shortcode('[contact-form-7 id="' . $item['multi_step_form'] . '" html_class="form-step"]') ?>
									<?php endif ?>

									<?php if ($item['below_form_text']): ?>
										<div class="info-text"><?= $item['below_form_text'] ?></div>
									<?php endif ?>

								</div>

								<?php 
								break;

								case 'image_slider_block':
								?>

								<?php if ($item['slider_items']): ?>
									<div class="slier-wrap">
										<div class="swiper img-full-slider">
											<div class="swiper-wrapper">

												<?php foreach ($item['slider_items'] as $item_2): ?>
													<div class="swiper-slide">

														<?php if ($item_2['image']): ?>
															<?= wp_get_attachment_image($item_2['image']['ID'], 'full') ?>
														<?php endif ?>

														<?php if ($item_2['description']): ?>
															<p class="line"><?= $item_2['description'] ?></p>
														<?php endif ?>

													</div>
												<?php endforeach ?>

											</div>
											<div class="nav-wrap d-flex justify-content-between">
												<div class="swiper-button-next img-full-next"><i class="fa-solid fa-arrow-right"></i></div>
												<div class="swiper-button-prev img-full-prev"><i class="fa-solid fa-arrow-left"></i></div>
											</div>
										</div>
									</div>
								<?php endif ?>

								<?php 
								break;

								case 'link_and_socials_share_block':
								?>

								<?php if ($field = get_field('socials_share_block_d', 'option')): ?>
									<div class="bottom-link d-flex flex-wrap justify-content-between align-items-center">

										<?php if ($field['prev_link_text']): ?>
											<div class="link-wrap">
												<a href="#" onclick="history.back();"><i class="fa-regular fa-arrow-left"></i><?= $field['prev_link_text'] ?></a>
											</div>
										<?php endif ?>

										<?php if ($field['items']): ?>
											<ul class="soc-list d-flex align-items-center">

												<?php if ($field['title']): ?>
													<li><p><?= $field['title'] ?></p></li>
												<?php endif ?>

												<?php foreach ($field['items'] as $item_2): ?>
													<?php if ($item_2['icon']): ?>
														<li>
															<a href="<?= $item_2['url'] ?>" target="_blank">
																<i class="<?= $item_2['icon'] ?>"></i>
															</a>
														</li>
													<?php endif ?>
												<?php endforeach ?>

											</ul>
										<?php endif ?>

									</div>
								<?php endif ?>

								<?php 
								break;

								default:
								break;

							}

						endforeach ?>
						
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>