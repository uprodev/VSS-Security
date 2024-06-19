<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$is_default = $custom_default == 'Default';
	$is_custom = $custom_default == 'Custom' && $custom;
	?>

	<section class="vacancy-content bg-grey"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="top">

					<?php if ($subtitle): ?>
						<h6 class="label-red"><span></span><?= $subtitle ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?= $description ?>

				</div>

				<?php if ($is_default || $is_custom): ?>

					<?php 
					$args = array(
						'post_type' => 'vacature', 
						'posts_per_page' => 6,
						'post_status' => 'publish',
						'paged' => get_query_var('paged')
					);
					if($is_custom) {
						$args['post__in'] = wp_list_pluck($custom, 'ID');
						$args['orderby'] = 'post__in';
					} 
					$wp_query = new WP_Query($args); 
					?>

					<div class="content d-flex flex-wrap" id="response_vacancies">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<?php get_template_part('parts/content', 'vacancy') ?>
						<?php 
					endwhile;
					wp_reset_postdata(); 
					?>

				</div>

				<?php if ($wp_query->max_num_pages > 1 && $load_more_button_text): ?>
					<script> var this_page = 1; </script>

					<div class="btn-wrap d-flex justify-content-center">
						<a href="#" class="btn-circle load_vacancies" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?= $load_more_button_text ?> <span><i class="fa-solid fa-arrow-down"></i></span></a>
					</div>
				<?php endif ?>

			<?php endif ?>

		</div>
	</div>
</section>

<?php endif; ?>