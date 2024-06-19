<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="bg-text-img add-video mt-60"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">
					<div class="text">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h3><?= $title ?></h3>
						<?php endif ?>

						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>

						<?php if ($button): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">
								<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
							</div>
						<?php endif ?>

					</div>

					<?php if (($is_video = $is_show_video && $video_url) || $image): ?>
						<figure>

							<?php if ($is_video): ?>
								<a data-fancybox href="<?= $video_url ?>">
								<?php endif ?>

								<?php if ($image): ?>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								<?php endif ?>

								<?php if ($is_video): ?>
									<span class="icon-wrap"><i class="fa-regular fa-play"></i></span>
								</a>
							<?php endif ?>

						</figure>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>