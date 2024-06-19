<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 

	$is_default = $custom_default == 'Default';

	$image_ = $is_default ? get_field('image_cta', 'option') : $image;
	$circle_text_ = $is_default ? get_field('circle_text_cta', 'option') : $circle_text;
	$available_text_ = $is_default ? get_field('available_text_cta', 'option') : $available_text;
	$title_ = $is_default ? get_field('title_cta', 'option') : $title;
	$description_ = $is_default ? get_field('description_cta', 'option') : $description;
	$button_ = $is_default ? get_field('button_cta', 'option') : $button;
	$tel_text_ = $is_default ? get_field('tel_text_cta', 'option') : $tel_text;
	$tel_icon_ = $is_default ? get_field('tel_icon_cta', 'option') : $tel_icon;
	$tel_link_ = $is_default ? get_field('tel_link_cta', 'option') : $tel_link;
	?>

	<section class="cta-card"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($image_ || $circle_text_): ?>
						<figure>

							<?php if ($image_): ?>
								<?= wp_get_attachment_image($image_['ID'], 'full') ?>
							<?php endif ?>

							<?php if ($circle_text_): ?>
								<div class="text-circle">
									<p><?= $circle_text_ ?></p>
								</div>
							<?php endif ?>

						</figure>
					<?php endif ?>
					
					<div class="text">

						<?php if ($available_text_): ?>
							<h6 class="label"><span></span><?= $available_text_ ?></h6>
						<?php endif ?>

						<?php if ($title_): ?>
							<h3 class="title"><?= $title_ ?></h3>
						<?php endif ?>

						<?php if ($description_): ?>
							<div class="text-wrap"><?= $description_ ?></div>
						<?php endif ?>

						<div class="btn-wrap d-flex flex-wrap align-items-center">

							<?php if ($button_): ?>
								<a href="<?= $button_['url'] ?>" class="btn-circle btn-circle-white"<?php if($button_['target']) echo ' target="_blank"' ?>><?= $button_['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
							<?php endif ?>

							<p>
								
								<?= $tel_text_ ?>

								<?php if ($tel_link_): ?>
									<a href="<?= $tel_link_['url'] ?>"<?php if($tel_link_['target']) echo ' target="_blank"' ?>>

										<?php if ($tel_icon_): ?>
											<span><i class="<?= $tel_icon_ ?>"></i></span>
										<?php endif ?>
										
										<?= $tel_link_['title'] ?>
									</a>
								<?php endif ?>
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>