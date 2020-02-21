<!-- <article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article> -->
<section class="about">
  <div class="container">
      <div class="about__content">
        <div class="about__left">
            <h3 class="about__title">
              About us
            </h3>
            <h2 class="about__subtitle">
              WE WILL TURN YOUR WORK INTO AN EXCITING JOURNEY.
            </h2>
            <p class="about__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
              sed do eiusmod tempor incididunt ut labore et dolore 
              magna aliqua. Faucibus purus in massa tempor nec 
              feugiat nisl pretium fusce. Ac turpis egestas integer eget.
              Felis bibendum ut tristique et egestas quis ipsu.                               
            </p>
            <p class="about__text">
              sa massa ultricies mi quis hendrerit dolor magna. Facilisis 
              leo vel fringilla est ullamcorper eget nulla facilisi etiam. 
              Lectus arcu bibendum at varius. In massa tempor nec 
              feugiat nisl. Mattis ullamcorper velit sed ullamcorper 
              morbi tincidunt ornare massa eget. Adipiscing elit ut 
              aliquam purus. Nunc pulvinar sapien et ligula ullam
            </p>
            <a href="#" class="about__button">more info</a>
        </div>
        <div class="about__right">
            <div class="about__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-img.png" alt="image" class="about__img">
            </div>
        </div>
      </div>
  </div>
</section>

<section class="cards">
  <div class="container">
      <div class="cards__content">
        <h2 class="cards__title">
            TRAVEL WITH OUR COMPANY
        </h2>
        <h4 class="cards__subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore   
        </h4>
        <div class="cards__wrapper">
            <div class="cards__row">
              <div class="cards__card">
                  <div class="cards__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-img2.png" alt="card1" class="cards__img">
                  </div>
                  <h2 class="cards__strong">
                    COMFORTABLE PREMIUM CLASS ACCOMMODATIONS
                  </h2>
                  <p class="cards__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                  <a href="#" class="cards__button">
                    view photos
                  </a>
              </div>
              <div class="cards__card">
                  <div class="cards__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-img1.png" alt="card1" class="cards__img">
                  </div>
                  <h2 class="cards__strong">
                    WEEKLY GROUP ENTERTAINMENT AND EXCURSIONS
                  </h2>
                  <p class="cards__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                  <a href="#" class="cards__button">
                    view photos
                  </a>
              </div>
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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-img.png" alt="image" class="about__img">
            </div>
        </div>
        <div class="next__right">
            <h3 class="next__title">
              Next Tour
            </h3>
            <h2 class="next__subtitle">
              UNFORGETTABLE ADVENTURE IN FILIPINAS
            </h2>
            <p class="next__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
              sed do eiusmod tempor incididunt ut labore et dolore 
              magna aliqua. Faucibus purus in massa tempor nec 
              feugiat nisl pretium fusce. Ac turpis egestas integer eget.
              Felis bibendum ut tristique et egestas quis ipsu.                                
            </p>
            <p class="next__text">
              sa massa ultricies mi quis hendrerit dolor magna. Facilisis 
              leo vel fringilla est ullamcorper eget nulla facilisi etiam. 
              Lectus arcu bibendum at varius. In massa tempor nec 
              feugiat nisl. Mattis ullamcorper velit sed ullamcorper 
              morbi tincidunt ornare massa eget. Adipiscing elit ut 
              aliquam purus. Nunc pulvinar sapien et ligula ullam
            </p>
            <p class="next__text">
              Mauris ultrices eros in cursus turpis massa tincidunt dui 
              ut. Mauris rhoncus aenean vel elit scelerisque mauris. 
              Pretium vulputate sapien nec sagittis aliquam malesuada. 
              Lectus magna fringilla urna porttitor rhoncus dolor purus. 
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