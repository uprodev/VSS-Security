<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="line-info">
      <div class="container">
        <div class="row">
          <div class="content d-flex justify-content-end flex-wrap align-items-center">

            <?php if(have_rows('links_t', 'option')): ?>

              <nav class="menu">
                <ul class="d-flex">

                  <?php while(have_rows('links_t', 'option')): the_row() ?>

                    <?php if ($field = get_sub_field('link')): ?>
                      <li>
                        <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>>
                          <?= $field['title'] ?>

                          <?php if (get_sub_field('dropdown') && get_sub_field('is_dropdown')): ?>
                          <i class="fa-solid fa-chevron-down"></i>
                        <?php endif ?>

                      </a>

                      <?php if (($items = get_sub_field('dropdown')) && get_sub_field('is_dropdown')): ?>
                      <ul class="sub-menu-mini">

                        <?php foreach ($items as $item): ?>
                          <?php if ($item['link']): ?>
                            <li>
                              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                            </li>
                          <?php endif ?>
                        <?php endforeach ?>

                      </ul>
                    <?php endif ?>

                  </li>
                <?php endif ?>

              <?php endwhile ?>

            </ul>
          </nav>

        <?php endif ?>

        <div class="info d-flex align-items-center">

          <?php if ($field = get_field('contact_availability_t', 'option')): ?>
            <p><span></span><?= $field ?></p>
          <?php endif ?>
          
          <?php if ($field = get_field('contact_link_t', 'option')): ?>
            <p>
              <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>>

                <?php if ($icon = get_field('contact_icon_t', 'option')): ?>
                  <i class="<?= $icon ?>"></i>
                <?php endif ?>
                
                <?= $field['title'] ?>
              </a>
            </p>
          <?php endif ?>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="top-line">
  <div class="container">
    <div class="row">
      <div class="content d-flex justify-content-between p-0 align-items-center">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="top-menu-wrap d-flex justify-content-end align-items-center">

          <?php if(have_rows('links_h', 'option')): ?>

            <ul class="top-menu d-flex">

              <?php while(have_rows('links_h', 'option')): the_row() ?>

                <?php if ($field = get_sub_field('link')): ?>
                  <li>
                    <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?>

                    <?php if (get_sub_field('links') && get_sub_field('is_dropdown')): ?>
                    <i class="fa-solid fa-chevron-down"></i>
                  <?php endif ?>
                  
                </a>

                <?php if (($items = get_sub_field('links')) && get_sub_field('is_dropdown')): ?>
                <nav class="mega-menu ">
                  <div class="container">
                    <div class="row">
                      <div class="item ">
                        <ul class="mega-6 d-flex justify-content-between w-100 p-0">

                          <?php foreach ($items as $item): ?>
                            <?php if ($item['link']): ?>
                              <?php if ($item['is_cta_card_link']): ?>
                                <li>
                                  <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                                    <div class="bg-red">
                                      <h6><?= $item['link']['title'] ?></h6>
                                      <div class="circle">
                                        <i class="fa-regular fa-arrow-right"></i>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                              <?php else: ?>
                                <li>
                                  <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                                    <figure>

                                      <?php if ($item['image']): ?>
                                        <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                                      <?php endif ?>

                                      <span class="arrow-45">
                                        <span class="wrap-arrow"></span>
                                        <i class="fa-regular fa-arrow-right"></i>
                                      </span>
                                    </figure>
                                    <div class="text">
                                      <h6><?= $item['link']['title'] ?></h6>
                                      <?= $item['description'] ?>
                                    </div>
                                  </a>
                                </li>
                              <?php endif ?>
                            <?php endif ?>
                          <?php endforeach ?>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </nav>
              <?php endif ?>

            </li>
          <?php endif ?>

        <?php endwhile ?>

      </ul>

    <?php endif ?>

    <?php if ($field = get_field('button_h', 'option')): ?>
      <div class="btn-wrap">
        <a href="<?= $field['url'] ?>" class="btn-border"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><i class="fa-regular fa-arrow-right"></i></a>
      </div>
    <?php endif ?>

    <div class="open-menu d-flex justify-content-end d-xl-none">
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
  </nav>
</div>

</div>
</div>
</div>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="top">
    <div class="close-menu">
      <a href="#"><i class="fal fa-times"></i></a>
    </div>
  </div>
  <div class="wrap">

    <?php if ($field = get_field('logo_h', 'option')): ?>
      <div class="logo-wrap">
        <a href="<?= get_home_url() ?>">
          <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
            <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
          <?php else: ?>
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          <?php endif ?>
        </a>
      </div>
    <?php endif ?>

    <nav class="mob-menu-wrap">

      <?php wp_nav_menu( array(
        'theme_location'  => 'header-mobile',
        'container'       => '',
        'items_wrap'      => '<ul class="mob-menu p-0">%3$s</ul>'
      )); ?>

      <?php if ($field = get_field('button_h', 'option')): ?>
        <div class="btn-wrap">
          <a href="<?= $field['url'] ?>" class="btn-border"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><i class="fa-regular fa-arrow-right"></i></a>
        </div>
      <?php endif ?>

    </nav>
  </div>
</div>

<main>