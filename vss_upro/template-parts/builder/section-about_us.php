<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="about<?php if($background_color == 'Grey') echo ' bg-grey' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">
					<div class="text col-lg-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>
						
						<?= $description ?>

						<?php if ($inner_content): ?>
							<ul class="list">

								<?php foreach ($inner_content as $item): ?>
									<li<?php if($item['grey_red'] == 'Red') echo ' class="red"' ?>>

										<?php if ($item['optional_link']): ?>
											<a href="<?= $item['optional_link']['url'] ?>"<?php if($item['optional_link']['target']) echo ' target="_blank"' ?>>
											<?php endif ?>

											<span class="line"></span>

											<?php if ($item['title']): ?>
												<h6 class="title"><?= $item['title'] ?></h6>
											<?php endif ?>

											<?= $item['text'] ?>

											<?php if ($item['optional_link']): ?>
											</a>
										<?php endif ?>
										
									</li>
								<?php endforeach ?>

							</ul>
						<?php endif ?>
						
						<?php if ($button || $normal_link): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">

								<?php if ($button): ?>
									<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php endif ?>

								<?php if ($normal_link): ?>
									<a href="<?= $normal_link['url'] ?>" class="link"<?php if($normal_link['target']) echo ' target="_blank"' ?>><?= $normal_link['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
								<?php endif ?>

							</div>
						<?php endif ?>
						
					</div>

					<?php if ($image): ?>
						<figure class="col-lg-6 col-12">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<span class="after-left-45 after-left-45-big"></span>
						</figure>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>