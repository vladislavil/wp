<section class="about">
  <div class="container">
    <div class="about__content">
      <div class="about__left">
        <h3 class="about__title">
          <?php the_field('about_title'); ?>
        </h3>
        <h2 class="about__subtitle">
          <?php the_field('about_subtitle'); ?>
        </h2>
        <p class="about__text">
          <?php the_field('about_text'); ?>
        </p>
        <a href="#" class="about__button">more info</a>
      </div>
      <div class="about__right">
        <div class="about__wrapper">
          <img src="<?php the_field('about_img') ?>" alt="image" class="about__img">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery">
  <div class="container">
    <h2 class="gallery__title">
      @php the_field('gallery_title') @endphp
    </h2>
    <p class="gallery__description">
      @php the_field('gallery_text') @endphp
    </p>
    <?php if( function_exists('photo_gallery') ) { echo photo_gallery(2); } ?>
  </div>
</section>

<section class="cards">
  <div class="container">
      <div class="cards__content">
        <h2 class="cards__title">
            @php the_field('cards-title') @endphp
        </h2>
        <h4 class="cards__subtitle">
            @php  the_field('cards-subtitle') @endphp
        </h4>
        <div class="cards__wrapper">
            <div class="cards__row">
            @php 
                  $posts = get_posts( array(
                  'numberposts' => -1,
                  'category_name' => 'cards',
                  'orderby'     => 'date',
                  'order'       => 'DESC',
                  'post_type'   => 'any ',
                  'post_status' => 'any',
                  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                  setup_postdata($post);
            @endphp
            
              <div class="cards__card">
                  <!-- @php
                    print_r(the_meta());
                  @endphp -->
                  <div class="cards__inner">
                    <img src="<?php $img = get_post_meta($post->ID); echo wp_get_attachment_image_url($img['card_img'][0], 'full') ?>" class="cards__img">
                  </div>
                  <h2 class="cards__strong">
                    <?php echo $post->post_title ?> 
                  </h2>
                  <p class="cards__text">
                    <?php $text = get_post_meta($post->ID); echo $text['card_text'][0] ?>
                  </p>
                  <a href="#" class="cards__button">
                    view photos
                  </a>
              </div>
            @php
            }
                wp_reset_postdata(); // сброс
            @endphp
            </div>
        </div>
      </div>
  </div>
</section>

<section class="next">
  <div class="container">
      <div class="next__content">
        <div class="next__left">
            <div class="next__wrapper">
              <img src="<?php the_field('next_img') ?>" alt="image" class="about__img">
            </div>
        </div>
        <div class="next__right">
            <h3 class="next__title">
              @php the_field('next_title') @endphp
            </h3>
            <h2 class="next__subtitle">
              @php the_field('next_subtitle') @endphp
            </h2>
            <p class="next__text">
              @php the_field('next_text') @endphp
            </p>
        </div>
      </div>
  </div>
</section>

<section class="feedback">
  <div class="container">
      <div class="feedback__content">
        <div class="feedback__wrapper">
            <h2 class="feedback__title">
              BOOK A DISCOUNTER TOUR
            </h2>
            <h4 class="feedback__subtitle">
              Mauris ultrices eros in cursus turpis 
            </h4>
        </div>
        <form class="feedback__form" onsubmit="return false">
            <div class="feedback__inner">
              <div class="feedback__part">
                  <input type="text" class="feedback__input" placeholder="Name">
              </div>
              <div class="feedback__part">
                  <input type="text" maxlength="12" class="feedback__input" placeholder="Email">
              </div>
              <button type="submit" class="feedback__button">
                  send
              </button>
            </div>
        </form>
      </div>
  </div>
</section>