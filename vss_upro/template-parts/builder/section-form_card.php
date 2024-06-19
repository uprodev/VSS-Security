<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

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

	<section class="step-slider-section only-form m-0 p-0"<?php if($id) echo ' id="' . $id . '"' ?>>
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
	</section>

	<?php endif; ?>