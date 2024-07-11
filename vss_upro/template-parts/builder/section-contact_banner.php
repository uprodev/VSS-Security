<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner contact-banner p-0"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="top-wrap">
			<div class="bg"></div>
			<div class="container">
				<div class="row">
					<div class="content d-flex flex-wrap justify-content-between">

						<?php if ($left_column): ?>
							<div class="text col-xxl-6 col-lg-4 col-12">

								<?php if ($left_column['subtitle']): ?>
									<h6 class="label-red"><span></span><?= $left_column['subtitle'] ?></h6>
								<?php endif ?>

								<?php if ($left_column['title']): ?>
									<h1><?= $left_column['title'] ?></h1>
								<?php endif ?>

								<div class="text-wrap">

									<?= $left_column['description'] ?>

									<div class="tel-wrap">

										<?php if ($left_column['tel_link']): ?>
											<a href="<?= $left_column['tel_link']['url'] ?>"<?php if($left_column['tel_link']['target']) echo ' target="_blank"' ?>>

												<?php if ($left_column['tel_icon']): ?>
													<span><i class="<?= $left_column['tel_icon'] ?>"></i></span>
												<?php endif ?>

												<?= $left_column['tel_link']['title'] ?>

												<?php if ($left_column['after_tel']): ?>
													<b><?= $left_column['after_tel'] ?></b>
												<?php endif ?>

											</a>
										<?php endif ?>

										<?php if ($left_column['mail_link']): ?>
											<a href="<?= $left_column['mail_link']['url'] ?>"<?php if($left_column['mail_link']['target']) echo ' target="_blank"' ?>>

												<?php if ($left_column['mail_icon']): ?>
													<span><i class="<?= $left_column['tel_icon'] ?>"></i></span>
												<?php endif ?>

												<?= $left_column['mail_link']['title'] ?>
											</a>
										<?php endif ?>
										
									</div>
								</div>
							</div>
						<?php endif ?>
						
						<?php if ($right_column): ?>
							<div class="form-wrap">
								<div class="top-form d-flex flex-wrap justify-content-between align-items-center">

									<?php if($right_column['images']): ?>

										<figure class="d-flex">

											<?php foreach($right_column['images'] as $index => $image): ?>

												<?php 
												$image_class = 'img img-' . strval($index + 1);
												echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => $image_class)); 
												?>

											<?php endforeach; ?>

										</figure>

									<?php endif; ?>

									<?php if ($right_column['title_black'] || $right_column['title_red']): ?>
										<div class="title-wrap">
											<h4>
												<?= $right_column['title_black'] ?>

												<?php if ($right_column['title_red']): ?>
													<b><?= $right_column['title_red'] ?></b>
												<?php endif ?>
												
											</h4>
										</div>
									<?php endif ?>

								</div>

								<?php if ($right_column['form']): ?>
									<?= do_shortcode('[contact-form-7 id="' . $right_column['form'] . '" html_class="form-white form-grey"]') ?>
								<?php endif ?>

								<?php if ($right_column['below_form_text']): ?>
									<div class="info-text"><?= $right_column['below_form_text'] ?></div>
								<?php endif ?>

							</div>

						</div>
					<?php endif ?>

				</div>
			</div>
		</div>

		<?php if ($description): ?>
			<div class="bottom-wrap">
				<div class="container">
					<div class="row">
						<div class="bottom-content"><?= $description ?></div>
					</div>
				</div>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>