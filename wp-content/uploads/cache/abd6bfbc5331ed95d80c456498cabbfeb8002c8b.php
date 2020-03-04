<header class="header">
  <div class="container">
    <div class="header__content">
      <nav class="nav-primary">
          <?php if(has_nav_menu('header_nav')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'header_nav', 'menu_class' => 'header__list']); ?>

          <?php endif; ?>
          
      </nav>
    </div>
    <!-- <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a> -->
  </div>
</header>
<section class="main__banner">
  <div class="banner" style="background: url('<?php the_field('banner_img') ?>')">
      <div class="banner__content">
        <div class="banner__wrapper">
            <h1 class="banner__title">
              <?php the_field('banner_title') ?>
            </h1>
            <p class="banner__text">
              <?php the_field('banner_text') ?>
            </p>
            <a href="#" class="banner__button">
              more info
            </a>
        </div>
      </div>
  </div>
</section>
