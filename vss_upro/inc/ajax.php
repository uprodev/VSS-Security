<?php

$actions = [
	'load_vacancies',
	'load_news',
	'search_nieuws',

];
foreach ($actions as $action) {
	add_action("wp_ajax_{$action}", $action);
	add_action("wp_ajax_nopriv_{$action}", $action);
}


function load_vacancies () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<?php get_template_part('parts/content', 'vacancy') ?>

		<?php }
	}
	wp_reset_query(); 
	die();
}

function load_news () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<?php get_template_part('parts/content', 'news', ['post_type' => get_post_type()]) ?>

		<?php }
	}
	wp_reset_query(); 
	die();
}

function search_nieuws(){

	$args  = array(
		's'           => $_GET['search'],
		'numberposts' => -1,
		'post_types'  => ['nieuws', 'referentie'],
		'relevanssi'  => true,
		'tax_query' => [
			'relation' => 'AND',
			[
				'taxonomy' => 'nieuws_cat',
				'field' => 'id',
				'terms' => [ $_GET['categ'] ]
			],
			[
				'taxonomy' => 'nieuws_label',
				'field' => 'id',
				'terms' => [ $_GET['soort'] ]
			],
			[
				'taxonomy' => 'referentie_cat',
				'field' => 'id',
				'terms' => [ $_GET['categ'] ]
			],
			[
				'taxonomy' => 'referentie_label',
				'field' => 'id',
				'terms' => [ $_GET['soort'] ]
			],
		]
	);

	$query = new WP_Query( $args );

	$query->parse_query( $args );

	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$max_pages = $query->max_num_pages;
	add_filter( 'pre_option_relevanssi_excerpts', '__return_false' );

	relevanssi_do_query( $query );?>

	<div class="content d-flex flex-wrap" id="response_news">
		<?php while($query->have_posts()): $query->the_post();
			get_template_part('parts/content', 'news', ['post_type' => get_post_type()]);

		endwhile;?>

	</div>

	<?php if( $paged < $max_pages ):?>

		<div class="btn-wrap d-flex justify-content-center">
			<a href="#" class="btn-circle load_news" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'>Laad meer <span><i class="fa-regular fa-arrow-right"></i></span></a>
		</div>

	<?php endif;?>

	<?php remove_filter( 'pre_option_relevanssi_excerpts', '__return_false' );

	die();

}