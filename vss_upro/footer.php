</main>

<footer>
  <div class="container">
    <div class="row">
      <div class="content d-flex justify-content-between flex-wrap">
        <div class="left col-lg-5 col-md-6 col-12">

          <?php if ($field = get_field('logo_f', 'option')): ?>
            <div class="logo-wrap">
              <a href="<?= $link = get_field('logo_link_f', 'option') ? $link['url'] : get_home_url() ?>">
                <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                  <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
                <?php else: ?>
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                <?php endif ?>
              </a>
            </div>
          <?php endif ?>

          <?php if ($field = get_field('description_f', 'option')): ?>
            <div class="text-wrap"><?= $field ?></div>
          <?php endif ?>
          
          <?php if(have_rows('logo_links_f', 'option')): ?>

            <ul class="logo-list d-flex flex-wrap">

              <?php while(have_rows('logo_links_f', 'option')): the_row() ?>

                <?php if ($field = get_sub_field('logo')): ?>
                  <li>
                    <a href="<?= get_sub_field('url') ?>" target="_blank">
                      <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                        <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
                      <?php else: ?>
                        <?= wp_get_attachment_image($field['ID'], 'full') ?>
                      <?php endif ?>
                    </a>
                  </li>
                <?php endif ?>

              <?php endwhile ?>

            </ul>

          <?php endif ?>

        </div>
        <div class="right col-lg-7 col-md-6 col-12 d-flex flex-wrap">

          <?php if ($field = get_field('column_1_f', 'option')): ?>
            <div class="item item-1">

              <?php if ($field['title']): ?>
                <h6><?= $field['title'] ?> <span></span></h6>
              <?php endif ?>

              <div class="wrap">

                <?php if ($field['links']): ?>
                  <ul class="menu">

                    <?php foreach ($field['links'] as $item): ?>
                      <?php if ($item['link']): ?>
                        <li>
                          <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                        </li>
                      <?php endif ?>
                    <?php endforeach ?>

                  </ul>
                <?php endif ?>

                <?php if ($field['text']): ?>
                  <div class="address"><?= $field['text'] ?></div>
                <?php endif ?>
                
                <?php if ($field['social_icons']): ?>
                  <ul class="soc">

                    <?php if ($field['social_icons']): ?>
                      <li>
                        <p><?= $field['social_icons_text'] ?></p>
                      </li>
                    <?php endif ?>

                    <?php foreach ($field['social_icons'] as $item): ?>
                      <?php if ($item['icon']): ?>
                        <li>
                          <a href="<?= $item['url'] ?>" target="_blank">
                            <i class="<?= $item['icon'] ?>"></i>
                          </a>
                        </li>
                      <?php endif ?>
                    <?php endforeach ?>

                  </ul>
                <?php endif ?>
                
              </div>
            </div>
          <?php endif ?>
          
          <?php if ($field = get_field('column_2_f', 'option')): ?>
            <div class="item item-2">

              <?php if ($field['title']): ?>
                <h6><?= $field['title'] ?> <span></span></h6>
              <?php endif ?>

              <?php if ($field['links']): ?>
                <ul class="menu wrap">

                  <?php foreach ($field['links'] as $item): ?>
                    <?php if ($item['link']): ?>
                      <li<?php if($field['links_spacing'] == 'Big') echo ' class="mb-3"' ?>>
                        <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>

                </ul>
              <?php endif ?>

            </div>
          <?php endif ?>
          
          <?php if ($field = get_field('column_3_f', 'option')): ?>
            <div class="item item-3">

              <?php if ($field['title']): ?>
                <h6><?= $field['title'] ?> <span></span></h6>
              <?php endif ?>

              <?php if ($field['links']): ?>
                <ul class="menu wrap">

                  <?php foreach ($field['links'] as $item): ?>
                    <?php if ($item['link']): ?>
                      <li<?php if($field['links_spacing'] == 'Big') echo ' class="mb-3"' ?>>
                        <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>

                </ul>
              <?php endif ?>

            </div>
          <?php endif ?>
          
        </div>
        <div class="bottom d-flex flex-wrap col-12 justify-content-between align-items-center">

          <?php if ($field = get_field('bottom_left_f', 'option')): ?>
            <div class="bottom-left"><?= $field ?></div>
          <?php endif ?>
          
          <?php if ($field = get_field('bottom_right_f', 'option')): ?>
            <div class="bottom-right">
              <ul class="d-flex justify-content-end align-items-center">

                <?php if ($field['links']): ?>
                  <?php foreach ($field['links'] as $item): ?>
                    <?php if ($item['link']): ?>
                      <li>
                        <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>
                <?php endif ?>

                <?php if ($field['last_link_item']): ?>
                  <li><?= $field['last_link_item'] ?></li>
                <?php endif ?>

              </ul>
            </div>
          <?php endif ?>
          
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>