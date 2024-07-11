<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php $is_video = $is_show_video && $video_url ?>

	<section class="bg-text-img mt-60<?php if($is_video) echo ' add-video' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
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

						<?php if ($button || $link): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">

								<?php if ($button): ?>
									<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php endif ?>
								
								<?php if ($link): ?>
									<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?>  <i class="fa-regular fa-arrow-right"></i></a>
								<?php endif ?>
								
							</div>
						<?php endif ?>

					</div>

					<?php if ($is_video || $image): ?>
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
					
					<?php if ($circle_text): ?>
						<div class="text-circle">
							<p><?= $circle_text ?></p>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>