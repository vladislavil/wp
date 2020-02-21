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
