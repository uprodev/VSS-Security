<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_default == 'Default';
	$is_custom = $custom_default == 'Custom' && $custom;
	?>

	<?php if ($is_default || $is_custom): ?>

		<?php 
		$args = array(
			'post_type' => ['nieuws', 'referentie'], 
			'posts_per_page' => 9,
			'post_status' => 'publish',
			'paged' => get_query_var('paged')
		);
		if($is_custom) {
			$args['post__in'] = wp_list_pluck($custom, 'ID');
			$args['orderby'] = 'post__in';
		} else {
			$args['orderby'] = 'date';
			$args['order'] = 'DESC';
		}
		$wp_query = new WP_Query($args); 
		?>

		<section class="vacancy-content bg-white"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row" id='ajax_news'>
					<div class="content d-flex flex-wrap" id="response_news">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<?php get_template_part('parts/content', 'news', ['post_type' => get_post_type()]) ?>
							<?php 
						endwhile;
						wp_reset_postdata(); 
						?>

					</div>

				<?php if ($wp_query->max_num_pages > 1 && $load_more_button): ?>
					<script> var this_page = 1; </script>

					<div class="btn-wrap d-flex justify-content-center">
						<a href="#" class="btn-circle load_news" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?= $load_more_button ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
					</div>
				<?php endif ?>

				</div>
			</div>
		</section>

	<?php endif ?>

	<?php endif; ?>