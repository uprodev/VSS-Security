<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_default == 'Default' && $default;
	$is_custom = $custom_default == 'Custom' && $custom_cards;
	?>

	<?php if ($is_default || $is_custom): ?>
		<section class="vacancy-content bg-grey"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row">

					<?php if ($title): ?>
						<div class="center text-center">
							<h2><?= $title ?></h2>
						</div>
					<?php endif ?>

					<?php if ($posts = $is_default ? $default : $custom_cards): ?>
						<div class="content d-flex flex-wrap">

							<?php foreach ($posts as $post): ?>

								<?php 
								if($is_default){
									$terms_1 = wp_get_object_terms($post->ID, get_post_type() . '_label');
									$terms_2 = wp_get_object_terms($post->ID, get_post_type() . '_cat');
								} 

								$label_ = $is_default ? ($terms_1 ?  $terms_1[0]->name : '') : $post['label'];
								$image_ = $is_default ? get_post_thumbnail_id($post->ID) : ($post['image'] ? $post['image']['ID'] : '');
								$subtitle_ = $is_default ? ($terms_2 ?  $terms_2[0]->name : '') : $post['subtitle'];
								$title_ = $is_default ? get_the_title($post->ID) : $post['title'];
								$excerpt_ = $is_default ? get_the_excerpt($post->ID) : $post['description'];
								$link_url_ = $is_default ? get_the_permalink($post->ID) : ($post['link'] ? $post['link']['url'] : '');
								$link_target_ = $is_default ? '' : ($post['link'] && $post['link']['target'] ? ' target="_blank"' : '');
								?>

								<div class="item">
									<figure>

										<?php if ($label_): ?>
											<p class="label-blog"><?= $label_ ?></p>
										<?php endif ?>
										
										<?php if ($image_): ?>
											<?= wp_get_attachment_image($image_, 'full') ?>
										<?php endif ?>
										
									</figure>
									<div class="text">

										<?php if ($subtitle_): ?>
											<p class="info"><?= $subtitle_ ?></p>
										<?php endif ?>
										
										<?php if ($title_): ?>
											<h6><?= $title_ ?></h6>
										<?php endif ?>

										<?= $excerpt_ ?>

										<?php if ($link_url_): ?>
											<div class="arrow-wrap">
												<a href="<?= $link_url_ ?>"<?= $link_target_ ?>><i class="fa-solid fa-arrow-right"></i></a>
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
	<?php endif ?>

	<?php endif; ?>