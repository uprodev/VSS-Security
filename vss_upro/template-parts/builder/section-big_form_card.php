<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="big-form-card<?php if($top_half_background_color == 'Grey') echo ' bg-top-grey'; if($bottom_half_background_color == 'Grey') echo ' bg-bottom-grey'; ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($left_column): ?>
						<div class="left">

							<?php if ($left_column['available_text']): ?>
								<h6 class="label"><span></span><?= $left_column['available_text'] ?></h6>
							<?php endif ?>
							
							<?php if ($left_column['available_text']): ?>
								<h3><?= $left_column['title'] ?></h3>
							<?php endif ?>
							
							<?= $left_column['description'] ?>

							<div class="user-wrap d-flex flex-wrap align-items-center">

								<?php if ($left_column['contact_image']): ?>
									<figure>
										<?= wp_get_attachment_image($left_column['contact_image']['ID'], 'full') ?>
									</figure>
								<?php endif ?>

								<div class="text">

									<?php if ($left_column['contact_name']): ?>
										<p class="name"><?= $left_column['contact_name'] ?></p>
									<?php endif ?>

									<?php if ($left_column['contact_function']): ?>
										<p><?= $left_column['contact_function'] ?></p>
									<?php endif ?>

									<?php if ($left_column['telephone_link']): ?>
										<div class="tel-wrap">
											<a href="<?= $left_column['telephone_link']['url'] ?>"<?php if($left_column['telephone_link']['target']) echo ' target="_blank"' ?>>

												<?php if ($left_column['telephone_icon']): ?>
													<span><i class="<?= $left_column['telephone_icon'] ?>"></i></span>
												<?php endif ?>

												<?= $left_column['telephone_link']['title'] ?></a>
											</div>
										<?php endif ?>

									</div>
								</div>
							</div>
						<?php endif ?>
						
						<?php if ($right_column): ?>
							<div class="form-wrap">

								<?php if ($right_column['form_select']): ?>
									<?= do_shortcode('[contact-form-7 id="' . $right_column['form_select'] . '" html_class="form-white"]') ?>
								<?php endif ?>

								<?php if ($right_column['below_form_text']): ?>
									<div class="info-text"><?= $right_column['below_form_text'] ?></div>
								<?php endif ?>

							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>