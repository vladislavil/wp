<header class="header">
  <div class="container">
    <div class="header__content">
      <nav class="nav-primary">
          @if (has_nav_menu('header_nav'))
            {!! wp_nav_menu(['theme_location' => 'header_nav', 'menu_class' => 'header__list']) !!}
          @endif
          
      </nav>
    </div>
    <!-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> -->
  </div>
</header>
<section class="main__banner">
  <div class="banner" style="background: url('<?php the_field('banner_img') ?>')">
      <div class="banner__content">
        <div class="banner__wrapper">
            <h1 class="banner__title">
              @php the_field('banner_title') @endphp
            </h1>
            <p class="banner__text">
              @php the_field('banner_text') @endphp
            </p>
            <a href="#" class="banner__button">
              more info
            </a>
        </div>
      </div>
  </div>
</section>
