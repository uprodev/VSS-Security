<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner employ-banner<?php if($background_color == 'Grey') echo ' bg-grey' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between">
					<div class="text col-lg-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>

						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>

						<?php if ($scroll_down_button && $scroll_down): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">

								<?php if ($scroll_down['title']): ?>
									<a href="<?= $scroll_down['url'] ?>" class="btn-circle"<?php if($scroll_down['target']) echo ' target="_blank"' ?>><?= $scroll_down['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php else: ?>
									<a href="<?= $scroll_down['url'] ?>" class="btn-arrow scroll"<?php if($scroll_down['target']) echo ' target="_blank"' ?>><span><i class="fa-regular fa-arrow-down"></i></span></a>
								<?php endif ?>

							</div>
						<?php endif ?>

					</div>
					<figure class="col-lg-6 col-12">

						<?php if ($image): ?>
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<span class="after-left-45"></span>
						<?php endif ?>

						<?php if ($show_quick_links): ?>
							<div class="list-link-wrap">

								<?php if ($quick_title): ?>
									<h6><?= $quick_title ?></h6>
								<?php endif ?>
								
								<?php if ($quick_links): ?>
									<ul class="list-link">

										<?php foreach ($quick_links as $item): ?>
											<?php if ($item['link']): ?>
												<li>
													<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="fa-solid fa-arrow-right"></i> <?= $item['link']['title'] ?></a>
												</li>
											<?php endif ?>
										<?php endforeach ?>
										
									</ul>
								<?php endif ?>
								
							</div>
						<?php endif ?>

					</figure>
					
					<?php if ($show_circle && $circle_text): ?>
						<div class="text-circle">
							<p><?= $circle_text ?></p>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>