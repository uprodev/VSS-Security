<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section-img-text<?php if($extra_optional_image) echo ' add-mini-img'; if($image_left_right == 'Right') echo ' section-img-text-revers'; if($background_color == 'Grey') echo ' bg-grey'; ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($image): ?>
						<figure class="col-lg-6 col-12">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<span class="after-left-45 after-left-45-big"><span></span></span>

							<?php if ($extra_optional_image): ?>
								<div class="mini-img">
									<?= wp_get_attachment_image($extra_optional_image['ID'], 'full') ?>
								</div>
							<?php endif ?>

						</figure>
					<?php endif ?>

					<div class="text col-lg-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?php if ($description || $list_items): ?>
							<div class="text-wrap">

								<?= $description ?>

								<?php if ($list_items): ?>
									<ul>

										<?php foreach ($list_items as $item): ?>
											<li>

												<?php if ($item['red_title_']): ?>
													<b><?= $item['red_title_'] ?></b> 
												<?php endif ?>
												
												<?= $item['normal_title'] ?>

											</li>
										<?php endforeach ?>

									</ul>
								<?php endif ?>

							</div>
						<?php endif ?>

						<?php if ($button || $link): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">

								<?php if ($button): ?>
									<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?><span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php endif ?>

								<?php if ($link): ?>
									<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?><i class="fa-regular fa-arrow-right"></i></a>
								<?php endif ?>

							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>