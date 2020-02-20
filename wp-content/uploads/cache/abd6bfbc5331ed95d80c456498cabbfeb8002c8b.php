<header class="header">
  <div class="container">
    <div class="header__content">
      <!-- <nav class="header__nav">
        <ul class="header__list">
            <li class="header__item"><a href="#" class="header__link">Home</a></li>
            <li class="header__item"><a href="#" class="header__link">About</a></li>
            <li class="header__item"><a href="#" class="header__link">Travel</a></li>
        </ul>
      </nav> -->
      <nav class="nav-primary">
          <?php if(has_nav_menu('header_nav')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'header_nav', 'menu_class' => 'header__list']); ?>

          <?php endif; ?>
          <!-- <ul class="header__nav header__list">
            <li class="header__item"><a href="#" class="header__link">Home</a></li>
            <li class="header__item"><a href="#" class="header__link">About</a></li>
            <li class="header__item"><a href="#" class="header__link">Travel</a></li>
          </ul> -->
      </nav>
    </div>
    <!-- <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a> -->

  </div>
</header>
<section class="main__banner">
    <div class="banner">
        <div class="banner__content">
          <div class="banner__wrapper">
              <h1 class="banner__title">
                Business Travel
              </h1>
              <p class="banner__text">
                For entrepreneurs and freelancers
              </p>
              <a href="#" class="banner__button">
                more info
              </a>
          </div>
        </div>
    </div>
  </section>
