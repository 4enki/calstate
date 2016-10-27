<?php
/**
 * Template Name: Services local page
 */

get_header(); ?>

<div class="headline headline-about" style="background-image: url('<?php echo get_field('services-local_bg_img-page'); ?>');">
  <div class="box">
    <div class="headline__wrapper">
      <h1><?php the_title(); ?></h1>
    </div><!-- /.headline__wrapper -->
    <div class="headline__footer">
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- /.headline__footer -->
  </div><!-- /.box -->
</div><!-- /.headline -->

<div class="page-wrapper">
  <div class="box">
    <div class="page-box">
      <div class="page__menu">
        <ul class="left-menu">
          <li class="left-menu__item"><a href="" class="left-menu__link">Local Moving</a></li>
          <li class="left-menu__item left-menu__item-active"><a href="" class="left-menu__link">Long Distance Moving</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">International Moving</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">Moving Labor</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">Commercial Moving</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">Corporate Relocation</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">Government & Military Moving</a></li>
          <li class="left-menu__item"><a href="" class="left-menu__link">Special Items Moving</a></li>
        </ul>
      </div><!-- /.page__menu -->
      <div class="page__content">

        <div class="page__content-line">
          <div class="local-list">
            <div class="local-list__item">
              <div class="local-box">
                <div class="prices-box__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single/truck-mini.png" alt=""></div>
                <div class="prices-box__info">
                  <div class="cost">
                    <div class="cost__box">
                      <sup class="cost-d">$</sup><span class="cost-n">89</span><span class="cost-time">&nbsp;/&nbsp;hour</span>
                    </div>
                    <div class="cost__header">2 MOVERS &amp; <span>TRUCK</span></div>
                    <div class="cost__text">THE BEST WAY TO MOVE A STUDIO OR ONE BEDROOM</div>
                  </div>
                  <a href="#p-get" class="book_now">BOOK <span>NOW</span></a>
                </div>
              </div>
            </div>
            <div class="local-list__item">
              <div class="local-box">
                <div class="prices-box__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single/truck-mini.png" alt=""></div>
                <div class="prices-box__info">
                  <div class="cost">
                    <div class="cost__box">
                      <sup class="cost-d">$</sup><span class="cost-n">109</span><span class="cost-time">&nbsp;/&nbsp;hour</span>
                    </div>
                    <div class="cost__header">3 MOVERS &amp; <span>TRUCK</span></div>
                    <div class="cost__text">THE BEST WAY TO MOVE A TWO OR THREE BEDROOM</div>
                  </div>
                  <a href="#p-get" class="book_now">BOOK <span>NOW</span></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="page__content-line">
          <div class="local-list-one">
            <div class="local-list-one__item">
              <div class="local-box">
                <div class="prices-box__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single/truck-big.png" alt=""></div>
                <div class="prices-box__info">
                  <div class="cost">
                    <div class="cost__box">
                      <sup class="cost-d">$</sup><span class="cost-n">139</span><span class="cost-time">&nbsp;/&nbsp;hour</span>
                    </div>
                    <div class="cost__header">4 MOVERS &amp; <span>TRUCK</span></div>
                    <div class="cost__text">THE BEST WAY TO MOVE A BIG HOUSE OR OFFICE</div>
                  </div>
                  <a href="#p-get" class="book_now book_now-blue">BOOK <span>NOW</span></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /.page__content -->
    </div><!-- /.page-box -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
