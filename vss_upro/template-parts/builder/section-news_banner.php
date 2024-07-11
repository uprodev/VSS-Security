<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner employ-banner knowledge-banner m-0"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($background_image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($background_image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="container">
			<div class="row">
				<div class="content d-flex flex-wrap justify-content-between">
					<div class="text col-md-6 col-12">

						<?php if ($subtitle): ?>
							<h6 class="label-red"><span></span><?= $subtitle ?></h6>
						<?php endif ?>

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
					<figure class="col-lg-6 col-12">
					</figure>
				</div>
			</div>
		</div>

		<?php 
		$terms_1 = get_terms( [
			'taxonomy' => ['referentie_label', 'nieuws_label'],
			'hide_empty' => false,
		] ); 
		?>

		<?php 
		$terms_2 = get_terms( [
			'taxonomy' => ['referentie_cat', 'nieuws_cat'],
			'hide_empty' => false,
		] ); 
		?>

		<div class="bottom-filter">
			<div class="container">
				<div class="row">
					<div class="filter">
						<form action="#" class="filter-form" id="search-form">
							<div class="wrap d-flex justify-content-between ">

								<?php if ($labels && $terms_1): ?>
									<div class="left">
										<div class="input-wrap select-block">

											<?php if ($labels['title']): ?>
												<label class="form-label" for="select1"><?= $labels['title'] ?></label>
											<?php endif ?>

											<select id="select1" name="select1">

												<?php if ($labels['placeholder']): ?>
													<option value="" selected><?= $labels['placeholder'] ?></option>
												<?php endif ?>

												<?php foreach ($terms_1 as $term): ?>
													<option value="<?= $term->term_id ?>"><?= $term->name ?></option>
												<?php endforeach ?>

											</select>
										</div>
									</div>
								<?php endif ?>

								<div class="right d-flex">

									<?php if ($categories && $terms_2): ?>
										<div class="input-wrap select-block">

											<?php if ($categories['title']): ?>
												<label class="form-label" for="select2"><?= $categories['title'] ?></label>
											<?php endif ?>

											<select id="select2" name="select2">

												<?php if ($categories['placeholder']): ?>
													<option value="" selected><?= $categories['placeholder'] ?></option>
												<?php endif ?>

												<?php foreach ($terms_2 as $term): ?>
													<option value="<?= $term->term_id ?>"><?= $term->name ?></option>
												<?php endforeach ?>

											</select>
										</div>
									<?php endif ?>

									<?php if ($search): ?>
										<div class="input-wrap">

											<?php if ($search['title']): ?>
												<label for="input1"><?= $search['title'] ?></label>
											<?php endif ?>

											<input type="search" id="search" name="s" placeholder="<?= $search['placeholder'] ?>">
										</div>
										<div class="input-wrap input-wrap-submit">
											<button type="submit" class="btn-arrow btn-red btn-find"><i class="fa-regular fa-magnifying-glass"></i></button>
										</div>
									<?php endif ?>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>