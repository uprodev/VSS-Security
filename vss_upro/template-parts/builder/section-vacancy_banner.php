<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner employ-banner work-banner<?php if($background_color == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between">
					<div class="text col-lg-6 col-12">

						<?php if ($label): ?>
							<h6 class="label-bg"><span></span><?= $label ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>

						<div class="text-wrap">

							<?= $description ?>

							<?php if ($list_items): ?>
								<ul class="list-info">

									<?php foreach ($list_items as $item): ?>
										<li>

											<?php if ($item['icon']): ?>
												<i class="<?= $item['icon'] ?>"></i>
											<?php endif ?>
											
											<?= $item['text'] ?>

										</li>
									<?php endforeach ?>
									
								</ul>
							<?php endif ?>
							
						</div>

						<?php if ($scroll_down_link): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">
								<a href="<?= $scroll_down_link['url'] ?>" class="btn-arrow scroll"<?php if($scroll_down_link['target']) echo ' target="_blank"' ?>><span><i class="fa-regular fa-arrow-down"></i></span></a>
							</div>
						<?php endif ?>

					</div>

					<?php if ($image): ?>
						<figure class="col-lg-6 col-12">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<span class="after-left-45"></span>
						</figure>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>