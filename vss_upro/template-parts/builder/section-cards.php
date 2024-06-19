<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="card-2x"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top text-center">

					<?php if ($subtitle): ?>
						<h6 class="label-red justify-content-center"><span></span><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $description ?>

				</div>

				<?php if ($cards): ?>
					<div class="content d-flex justify-content-between flex-wrap">

						<?php foreach ($cards as $item): ?>
							<div class="item<?php if(!$item['link']) echo ' no-link' ?>">

								<?php if ($item['image']): ?>
									<figure>
										<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
									</figure>
								<?php endif ?>
								
								<div class="text">

									<?php if ($item['title']): ?>
										<h5 class="sub-title"><?= $item['title'] ?></h5>
									<?php endif ?>
									
									<?= $item['description'] ?>

									<?php if ($item['link']): ?>
										<div class="arrow-wrap">
											<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="fa-solid fa-arrow-right"></i></a>
										</div>
									<?php endif ?>
									
								</div>
							</div>
						<?php endforeach ?>

					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>