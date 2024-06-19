<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-section">
		<div class="container">
			<div class="row">
				<div class="content">
					<div class="wrap">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>
						
						<?php if ($title): ?>
							<h3 class="title"><?= $title ?></h3>
						<?php endif ?>
						
						<?= $description ?>

						<?php if ($button): ?>
							<div class="btn-wrap">
								<a href="<?= $button['url'] ?>" class="btn-circle"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>