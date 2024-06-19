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
					<div class="content d-flex justify-content-between flex-wrap ">

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

				<?php if ($bar_below): ?>
					<div class="bottom d-flex flex-wrap">
						<figure class="d-flex">

							<?php if ($bar_below['image_1']): ?>
								<?= wp_get_attachment_image($bar_below['image_1']['ID'], 'full', false, array('class' => 'img img-1')) ?>
							<?php endif ?>

							<?php if ($bar_below['image_2']): ?>
								<?= wp_get_attachment_image($bar_below['image_2']['ID'], 'full', false, array('class' => 'img img-2')) ?>
							<?php endif ?>

							<?php if ($bar_below['text_with_blue_background']): ?>
								<span><?= $bar_below['text_with_blue_background'] ?></span>
							<?php endif ?>

						</figure>
						<div class="text d-flex flex-wrap justify-content-between">
							<div class="wrap d-flex justify-content-center flex-column">

								<?php if ($bar_below['bold_blue_title'] || $bar_below['bold_red_title']): ?>
									<h6>

										<?php if ($bar_below['bold_blue_title']): ?>
											<?= $bar_below['bold_blue_title'] ?>
										<?php endif ?>

										<?php if ($bar_below['bold_red_title']): ?>
											<span><?= $bar_below['bold_red_title'] ?></span></h6>
										<?php endif ?>

									<?php endif ?>

									<?= $bar_below['normal_text'] ?>

								</div>

								<?php if ($bar_below['arrow_link']): ?>
									<div class="btn-wrap">
										<a href="<?= $bar_below['arrow_link']['url'] ?>" class="btn-round btn-round-border btn-round-60"<?php if($bar_below['arrow_link']['target']) echo ' target="_blank"' ?>><i class="fa-regular fa-arrow-right"></i></a>
									</div>
								<?php endif ?>

							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
		</section>

		<?php endif; ?>