<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="img-text"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($image): ?>
						<figure class="col-lg-6 col-12">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<span class="after-left-45 after-left-45-big"><span></span></span>
						</figure>
					<?php endif ?>
					
					<div class="text col-lg-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>

						<?php if ($link): ?>
							<div class="btn-wrap">
								<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <i class="fa-regular fa-arrow-right"></i></a>
							</div>
						<?php endif ?>

					</div>

					<?php if ($list_items): ?>
						<div class="form-wrap">
							<div class="form-select-block d-flex justify-content-between flex-wrap">

								<?php if ($list_title): ?>
									<p><?= $list_title ?></p>
								<?php endif ?>

								<div class="select-block">								
									<div class="nice-select" tabindex="0">

										<?php if ($list_title): ?>
											<span class="current"><?= $list_title ?></span>
										<?php endif ?>

										<ul class="list">

											<?php if ($list_placeholder_text): ?>
												<li class="option selected disabled"><?= $list_placeholder_text ?></li>
											<?php endif ?>

											<?php foreach ($list_items as $index => $item): ?>
												<?php if ($item['link']): ?>
													<li class="option"><a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a></li>
												<?php endif ?>
											<?php endforeach ?>

										</ul>
									</div>
								</div>
								<div class="btn-wrap">
									<button type="submit" class="btn-round"><i class="fa-regular fa-arrow-right"></i></button>
								</div>
							</div>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>