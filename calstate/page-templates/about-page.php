<?php
/**
 * Template Name: About page
 */

get_header(); ?>
<div class="headline headline-about" style="background-image: url('<?php echo get_field('about_bg_img-page'); ?>');">
  <div class="box">
    <div class="headline__wrapper">
      <h1><?php the_title(); ?></h1>
    </div><!-- /.headline__wrapper -->
    <div class="headline__footer">
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- /.headline__footer -->
  </div><!-- /.box -->
</div><!-- /.headline -->

<div class="about">
  <div class="box">
    <h2>MORE THAN <span>1,000 MOVES A MONTH</span></h2>
    <div class="about-list">
      <div class="about__item">
        <div class="about-box">
          <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YZh5laVdCVA" frameborder="0" allowfullscreen></iframe>
          </div>
        </div><!-- /.about-box -->
      </div><!-- /.about__item -->
      <div class="about__item">
        <div class="about-box__description">
          <p>Licensed and bonded, CalState Moving & Storage is composed of relocation experts, capable of planning and executing seamless local and long distance moves.</p>
          <p>We work with a service-oriented philosophy, keeping in mind our customers' needs and faith in our company in order to provide seamless moves and other related relocation services.</p>
        </div><!-- /.about-box__description -->
      </div><!-- /.about__item -->
    </div><!-- /.about-list -->
  </div><!-- /.box -->
  <div class="why">
    <div class="box">
      <h2>WHY CHOOSE US</h2>
      <div class="why-list">

        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/1.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>LARGE <span>STORAGE</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->
        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/2.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>ON TIME <span>DELIVERY</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->

        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/3.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>MOVING <span>INSURANCE</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->

        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/4.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>CUSTOMER <span>SUPPORT</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->

        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/5.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>LARGEST <span>DESTINATIONS</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->

        <div class="why__item">
          <div class="why__item-box">
            <div class="why-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why/6.png" alt="">
            </div><!-- /.why-img -->
            <div class="why-info">
              <h3>EQUIPPED <span>TRUCKS</span></h3>
              <p>The best contact you will get here lorem ipsum dolor sit amet</p>
            </div><!-- /.why-info -->
          </div><!-- /.why__item-box -->
        </div><!-- /.why__item -->

      </div><!-- /.why-list -->
    </div><!-- /.box -->
  </div><!-- /.why -->

  <div class="ourpartner">
    <div class="box">
      <h2>COMPANIES <span>WHO TRUST US</span></h2>
      <div class="partner-list">

        <div class="partner__item">
          <div class="partner-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/angies-list.png" alt="">
          </div><!-- /.partner-box -->
        </div><!-- /.partner__item -->

        <div class="partner__item">
          <div class="partner-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/yelp.png" alt="">
          </div><!-- /.partner-box -->
        </div><!-- /.partner__item -->

        <div class="partner__item">
          <div class="partner-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/unpakt-logo.png" alt="">
          </div><!-- /.partner-box -->
        </div><!-- /.partner__item -->

        <div class="partner__item">
          <div class="partner-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/bitmap.png" alt="">
          </div><!-- /.partner-box -->
        </div><!-- /.partner__item -->

      </div><!-- /.partner-list -->
    </div><!-- /.box -->
  </div><!-- /.ourpartner -->

  <div class="reviews">
    <div class="box">
      <h2>CUSTOMERS REVIEWS</h2>
      <div class="reviews-wrap">

        <div class="reviews-list">

          <div class="reviews__item">
            <div class="reviews-box">
              <div class="reviews__header">
                <div class="reviews__header-box">
                  <div class="profile">
                    <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews/photo.png" alt=""></div>
                    <div class="info"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews/profile.png" alt=""></div>
                  </div>
                  <div class="rating"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews/rating.png" alt=""></div>
                </div>
              </div><!-- /.reviews__header -->
              <div class="reviews__text">
                <p>The move went exactly as I'd expected and they were able to accommodate to my special requests as I needed to make a quick pit stop to drop off a third of my boxes at a house nearby before moving my classroom full of boxes to another school.  They were helpful and I couldn't be more happier. I will surely use them again for my next move.</p>
              </div><!-- /.reviews__text -->
            </div><!-- /.reviews-box -->
          </div><!-- /.reviews__item -->

        </div><!-- /.reviews-list -->

        <div class="reviews__control">
          <div class="control">
            <div class="control__item control__item-active"></div>
            <div class="control__item"></div>
            <div class="control__item"></div>
          </div>
        </div>

      </div><!-- /.reviews-wrap -->
    </div><!-- /.box -->
  </div><!-- /.reviews -->

  <div class="box wee">
    <h2>We enjoyed <span>our company?</span></h2>
    <a href="" class="">Order <span>now</span></a>
  </div><!-- /.box -->

</div><!-- /.about -->

<?php get_footer(); ?>
