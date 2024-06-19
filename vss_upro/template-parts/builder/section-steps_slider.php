<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="step-slider-section"<?php if($id) echo ' id="' . $id . '"' ?>>
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

						<?php if ($steps): ?>
							<div class="slider-wrap p-0">
								<div class="swiper step-slider">
									<div class="swiper-wrapper">

										<?php foreach ($steps as $index => $item): ?>
											<div class="swiper-slide">
												<div class="label-slide">
													<span><?= $index + 1 ?></span>
												</div>

												<?php if ($item['image']): ?>
													<figure>
														<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
													</figure>
												<?php endif ?>

												<div class="text">

													<?php if ($item['title']): ?>
														<h5 class="title"><?= $item['title'] ?></h5>
													<?php endif ?>
													
													<?= $item['description'] ?>

													<?php if ($item['link']): ?>
														<div class="btn-wrap">
															<a href="<?= $item['link']['url'] ?>" class="link"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?> <i class="fa-regular fa-arrow-right"></i></a>
														</div>
													<?php endif ?>
													
												</div>
											</div>
										<?php endforeach ?>

									</div>
								</div>
								<div class="nav-wrap d-flex justify-content-between flex-wrap fd">
									<div class="wrap d-flex justify-content-between">
										<div class="swiper-button-next step-next"><i class="fa-solid fa-arrow-right"></i></div>
										<div class="swiper-button-prev step-prev"><i class="fa-solid fa-arrow-left"></i></div>
									</div>
									<div class="p-wrap d-flex align-items-center">
										<div class="swiper-pagination step-pagination"></div>
									</div>
								</div>
							</div>
						<?php endif ?>

					</div>

				</div>
			</div>
		</div>

		<?php if ($is_call_back_card): ?>

			<?php 
			$is_default = $custom_default_cta == 'Default';

			$image_ = $is_default ? get_field('image_form', 'option') : $contact_image;
			$name_ = $is_default ? get_field('name_form', 'option') : $contact_name;
			$function_ = $is_default ? get_field('small_text_form', 'option') : $contact_function;
			$icon_ = $is_default ? get_field('tel_icon_form', 'option') : $tel_icon;
			$phone_ = $is_default ? get_field('tel_link_form', 'option') : $telephone;
			$first_line_ = $is_default ? get_field('first_line_title_form', 'option') : $title_first_line;
			$second_line_ = $is_default ? get_field('second_line_title_form', 'option') : $title_second_line;
			$description_ = $is_default ? get_field('description_form', 'option') : $contact_description;
			$form_ = $is_default ? get_field('form_select_form', 'option') : $contact_form_7;
			?>

			<div class="bottom">
				<div class="container">
					<div class="row">
						<div class="bottom-content d-flex justify-content-between flex-wrap">
							<div class="user-wrap">

								<?php if ($image_): ?>
									<figure>
										<?= wp_get_attachment_image($image_['ID'], 'full') ?>
									</figure>
								<?php endif ?>
								
								<?php if ($name_): ?>
									<p class="name"><?= $name_ ?></p>
								<?php endif ?>
								
								<?php if ($function_): ?>
									<p><?= $function_ ?></p>
								<?php endif ?>
								
								<?php if ($phone_): ?>
									<div class="tel-wrap">
										<a href="<?= $phone_['url'] ?>"<?php if($phone_['target']) echo ' target="_blank"' ?>>

											<?php if ($icon_): ?>
												<span><i class="<?= $icon_ ?>"></i></span>
											<?php endif ?>
											
											<?= $phone_['title'] ?>
										</a>
									</div>
								<?php endif ?>
								
							</div>
							<div class="right">

								<?php if ($first_line_ || $second_line_): ?>
									<h4>

										<?php if ($first_line_): ?>
											<?= $first_line_ ?><br>
										<?php endif ?>

										<?= $second_line_ ?>
									</h4>
								<?php endif ?>
								
								<?= $description_ ?>

								<?php if ($form_): ?>
									<div class="form-wrap">
										<?= do_shortcode('[contact-form-7 id="' . $form_ . '" html_class="form-line"]') ?>
									</div>
								<?php endif ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>