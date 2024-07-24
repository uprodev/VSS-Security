<div class="item">
  <a href="<?php the_permalink() ?>"></a>
	<figure>

		<?php $terms = wp_get_object_terms(get_the_ID(), $args['post_type'] . '_label') ?>

		<?php if ($terms): ?>
			<?php foreach ($terms as $term): ?>
				<p class="label-blog"><?= $term->name ?></p>
			<?php endforeach ?>
		<?php endif ?>

		<?php the_post_thumbnail('full') ?>

	</figure>
	<div class="text">

		<?php $terms = wp_get_object_terms(get_the_ID(), $args['post_type'] . '_cat') ?>

		<?php if ($terms): ?>
			<?php foreach ($terms as $term): ?>
				<p class="info"><?= $term->name ?></p>
			<?php endforeach ?>
		<?php endif ?>
		
		<h6><?php the_title() ?></h6>

		<?php the_excerpt() ?>

		<div class="arrow-wrap">
			<a href="<?php the_permalink() ?>"><i class="fa-solid fa-arrow-right"></i></a>
		</div>
	</div>
</div>