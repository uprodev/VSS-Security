<?php get_header(); ?>

<section class="home-banner employ-banner knowledge-banner banner-404 m-0<?php if(get_field('background_404', 'option') == 'Grey') echo ' bg-grey' ?>">

	<?php if ($field = get_field('background_image_404', 'option')): ?>
		<div class="bg">
			<?= wp_get_attachment_image($field['ID'], 'full') ?>
		</div>
	<?php endif ?>

	<div class="container">
		<div class="row">
			<div class="content d-flex flex-wrap justify-content-between">
				<div class="text col-md-6 col-12">

					<?php if ($field = get_field('subtitle_404', 'option')): ?>
						<h6 class="label-red"><span></span><?= $field ?></h6>
					<?php endif ?>

					<?php if ($field = get_field('title_404', 'option')): ?>
						<h1><?= $field ?></h1>
					<?php endif ?>

					<?php if ($field = get_field('description_404', 'option')): ?>
						<div class="text-wrap"><?= $field ?></div>
					<?php endif ?>

					<?php if ($field = get_field('cta_button_404', 'option')): ?>
						<div class="btn-wrap d-flex align-items-center flex-wrap">
							<a href="<?= $field['url'] ?>" class="btn-circle btn-circle-revers"<?php if($field['target']) echo ' target="_blank"' ?>><span><i class="fa-regular fa-arrow-left"></i></span><?= $field['title'] ?></a>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>