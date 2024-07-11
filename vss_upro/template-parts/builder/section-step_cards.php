<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="step-card"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content">

					<?php if ($subtitle): ?>
						<h6 class="label-red"><span></span><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?php if ($cards): ?>
						<ul class="d-flex flex-wrap">

							<?php foreach ($cards as $item): ?>
								<li>

									<?php if ($item['icon']): ?>
										<div class="icon-wrap">
											<i class="<?= $item['icon'] ?>"></i>
										</div>
									<?php endif ?>
									
									<?php if ($item['title']): ?>
										<h6><?= $item['title'] ?></h6>
									<?php endif ?>
									
									<?= $item['description'] ?>

								</li>
							<?php endforeach ?>
							
						</ul>
					<?php endif ?>
					
					<?php if ($button): ?>
						<div class="btn-wrap d-flex justify-content-center">
							<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>