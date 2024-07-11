<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner employ-banner bg-grey m-0 p-80"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between">
					<div class="text col-lg-6 col-12">
						<ul class="breadcrumb d-flex flex-wrap align-items-center">

							<?php $terms = wp_get_object_terms(get_the_ID(), get_post_type() . '_label') ?>

							<?php if ($terms): ?>
								<?php foreach ($terms as $term): ?>
									<li><p><?= $term->name ?></p></li>
								<?php endforeach ?>
							<?php endif ?>

							<?php $terms = wp_get_object_terms(get_the_ID(), get_post_type() . '_cat') ?>

							<?php if ($terms): ?>
								<?php foreach ($terms as $term): ?>
									<li><?= $term->name ?></li>
								<?php endforeach ?>
							<?php endif ?>

						</ul>

						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>
						
						<?php if ($description): ?>
							<div class="text-wrap"><?= $description ?></div>
						<?php endif ?>

						<?php if ($scroll_down_icon): ?>
							<div class="btn-wrap d-flex align-items-center flex-wrap">
								<a href="<?= $scroll_down_icon['url'] ?>" class="btn-arrow scroll"<?php if($scroll_down_icon['target']) echo ' target="_blank"' ?>><span><i class="fa-regular fa-arrow-down"></i></span></a>
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