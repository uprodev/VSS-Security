<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="usp-section"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top text-center">

					<?php if ($title): ?>
						<h3><?= $title ?></h3>
					<?php endif ?>
					
					<?= $description ?>

				</div>

				<?php if ($usps): ?>
					<div class="content d-flex  flex-wrap ">

						<?php foreach ($usps as $item): ?>
							<div class="item">

								<?php if ($item['icon']): ?>
									<div class="icon-wrap">
										<i class="<?= $item['icon'] ?>"></i>
									</div>
								<?php endif ?>

								<?php if ($item['title']): ?>
									<h6><?= $item['title'] ?></h6>
								<?php endif ?>
								
								<?= $item['text'] ?>

							</div>
						<?php endforeach ?>

					</div>
				<?php endif ?>

				<?php if ($is_bar_below): ?>
					<div class="bottom d-flex flex-wrap">
						<figure class="d-flex">

							<?php if ($image_1 = $bar_below['custom_default'] == 'Custom' ? $bar_below['image_1'] : get_field('image_1_usps', 'option')): ?>
								<?= wp_get_attachment_image($image_1['ID'], 'full', false, array('class' => 'img img-1')) ?>
							<?php endif ?>

							<?php if ($image_2 = $bar_below['custom_default'] == 'Custom' ? $bar_below['image_2'] : get_field('image_2_usps', 'option')): ?>
								<?= wp_get_attachment_image($image_2['ID'], 'full', false, array('class' => 'img img-2')) ?>
							<?php endif ?>

							<?php if ($text_with_blue_background = $bar_below['custom_default'] == 'Custom' ? $bar_below['text_with_blue_background'] : get_field('text_with_blue_background_usps', 'option')): ?>
								<span><?= $text_with_blue_background ?></span>
							<?php endif ?>

						</figure>
						<div class="text d-flex flex-wrap justify-content-between">
							<div class="wrap d-flex justify-content-center flex-column">
								<h6>

									<?php if ($bold_blue_title = $bar_below['custom_default'] == 'Custom' ? $bar_below['bold_blue_title'] : get_field('bold_blue_title_usps', 'option')): ?>
										<?= $bold_blue_title ?>
									<?php endif ?>

									<?php if ($bold_red_title = $bar_below['custom_default'] == 'Custom' ? $bar_below['bold_red_title'] : get_field('bold_red_title_usps', 'option')): ?>
										<span><?= $bold_red_title ?></span>
									<?php endif ?>

								</h6>

								<?= $bar_below['custom_default'] == 'Custom' ? $bar_below['normal_text'] : get_field('normal_text_usps', 'option') ?>

							</div>

							<?php if ($arrow_link = $bar_below['custom_default'] == 'Custom' ? $bar_below['arrow_link'] : get_field('arrow_link_usps', 'option')): ?>
								<div class="btn-wrap">
									<a href="<?= $arrow_link['url'] ?>" class="btn-round btn-round-border btn-round-60"<?php if($arrow_link['target']) echo ' target="_blank"' ?>><i class="fa-regular fa-arrow-right"></i></a>
								</div>
							<?php endif ?>

						</div>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>