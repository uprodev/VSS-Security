<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-number"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container">
			<div class="row">
				<div class="content d-flex justify-content-between flex-wrap">

					<?php if ($left_column): ?>
						<div class="left col-lg-5 col-12">

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

					<?php if ($right_column_cards): ?>
						<div class="right d-flex justify-content-between flex-wrap col-lg-6 col-12">

							<?php foreach ($right_column_cards as $item): ?>
								<div class="item">

									<?php if ($item['big_text']): ?>
										<h6 class="big"><?= $item['big_text'] ?></h6>
									<?php endif ?>
									
									<?php if ($item['small_text']): ?>
										<p><?= $item['small_text'] ?></p>
									<?php endif ?>
									
								</div>
							<?php endforeach ?>
							
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>