<div class="item">

	<?php if (has_post_thumbnail()): ?>
		<figure>
			<?php the_post_thumbnail('full') ?>
		</figure>
	<?php endif ?>
	
	<div class="text">

		<?php if ($field = get_field('card_label')): ?>
			<p class="info"><?= $field ?></p>
		<?php endif ?>
		
		<h6><?php the_title() ?></h6>

		<?php if (get_field('time') || get_field('salary')): ?>
		<ul>

			<?php if ($field = get_field('time')): ?>
				<li><i class="fa-solid fa-clock"></i><?= $field ?></li>
			<?php endif ?>
			
			<?php if ($field = get_field('salary')): ?>
				<li><i class="fa-solid fa-coins"></i><?= $field ?></li>
			<?php endif ?>

		</ul>
	<?php endif ?>

	<?php the_excerpt() ?>

	<div class="arrow-wrap">
		<a href="<?php the_permalink() ?>"><i class="fa-solid fa-arrow-right"></i></a>
	</div>
</div>
</div>