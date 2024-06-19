<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="history"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($left_column): ?>
						<div class="text col-lg-5 col-12">

							<?php if ($left_column['subtitle']): ?>
								<h6 class="label-red"><?= $left_column['subtitle'] ?></h6>
							<?php endif ?>
							
							<?php if ($left_column['title']): ?>
								<h2><?= $left_column['title'] ?></h2>
							<?php endif ?>

							<?php if ($left_column['description']): ?>
								<div class="text-wrap"><?= $left_column['description'] ?></div>
							<?php endif ?>

							<?php if ($left_column['button'] || $left_column['arrow_link']): ?>
								<div class="btn-wrap d-flex align-items-center flex-wrap">

									<?php if ($left_column['button']): ?>
										<a href="<?= $left_column['button']['url'] ?>" class="btn-circle"<?php if($left_column['button']['target']) echo ' target="_blank"' ?>><?= $left_column['button']['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
									<?php endif ?>

									<?php if ($left_column['arrow_link']): ?>
										<a href="<?= $left_column['arrow_link']['url'] ?>" class="link"<?php if($left_column['arrow_link']['target']) echo ' target="_blank"' ?>><?= $left_column['arrow_link']['title'] ?> <i class="fa-regular fa-arrow-right"></i></a>
									<?php endif ?>

								</div>
							<?php endif ?>

						</div>
					<?php endif ?>

					<?php if ($right_column): ?>
						<div class="right col-lg-7 col-12">

							<?php if ($right_column['title']): ?>
								<p class="info"><?= $right_column['title'] ?></p>
							<?php endif ?>
							
							<?php if ($right_column['items']): ?>
								<div class="wrap-scroll">
									<ul>

										<?php foreach ($right_column['items'] as $item): ?>
											<li>

												<?php if ($item['icon']): ?>
													<div class="icon-wrap">
														<i class="<?= $item['icon'] ?>"></i>
													</div>
												<?php endif ?>
												
												<?php if ($item['red_title_text'] || $item['black_title_text']): ?>
													<h6>

														<?php if ($item['red_title_text']): ?>
															<b><?= $item['red_title_text'] ?></b>
														<?php endif ?> 

														<?= $item['black_title_text'] ?>

													</h6>
												<?php endif ?>
												
												<?= $item['description'] ?>

												<?php if ($item['button']): ?>
													<div class="btn-wrap d-flex align-items-center flex-wrap">
														<a href="<?= $item['button']['url'] ?>" class="btn-circle"<?php if($item['button']['target']) echo ' target="_blank"' ?>><?= $item['button']['title'] ?> <span><i class="fa-regular fa-arrow-right"></i></span></a>
													</div>
												<?php endif ?>

											</li>
										<?php endforeach ?>

									</ul>
								</div>
								<div class="after"></div>
							<?php endif ?>
							
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>