<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_default == 'Default';
	$is_custom = $custom_default == 'Custom' && $custom;
	?>

	<section class="vacancy-content bg-white"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">

				<?php if ($title): ?>
					<div class="center text-center">
						<h2><?= $title ?></h2>
					</div>
				<?php endif ?>

				<?php if ($is_default || $is_custom): ?>

					<?php 
					$args = array(
						'post_type' => 'vacature', 
						'posts_per_page' => 3,
						'post_status' => 'publish',
						'paged' => get_query_var('paged')
					);
					if($is_custom) {
						$args['post__in'] = wp_list_pluck($custom, 'ID');
						$args['orderby'] = 'post__in';
					} 
					$wp_query = new WP_Query($args); 
					?>

					<div class="content d-flex flex-wrap">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<?php get_template_part('parts/content', 'vacancy') ?>
							<?php 
						endwhile;
						wp_reset_postdata(); 
						?>

					</div>

				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>