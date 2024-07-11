<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($card_items): ?>
		<section class="item-4x"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container">
				<div class="row">

					<?php if ($title || $text): ?>
						<div class="top text-center">

							<?php if ($title): ?>
								<h3><?= $title ?></h3>
							<?php endif ?>
							
							<?= $text ?>
							
						</div>
					<?php endif ?>
					
					<div class="content d-flex flex-wrap">

						<?php foreach ($card_items as $item): ?>
							<div class="item">

								<?php if ($item['icon']): ?>
									<div class="icon-wrap">
										<i class="<?= $item['icon'] ?>"></i>
									</div>
								<?php endif ?>
								
								<?php if ($item['title']): ?>
									<h6><?= $item['title'] ?></h6>
								<?php endif ?>
								
								<?= $item['description'] ?>

							</div>
						<?php endforeach ?>
						
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>