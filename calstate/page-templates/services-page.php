<?php
/**
 * Template Name: Services page
 */

get_header(); ?>

<div class="headline headline-about" style="background-image: url('<?php echo get_field('services_bg_img-page'); ?>');">
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
        <?php wp_nav_menu( array ('menu' => 'moving-menu', 'menu_class' => 'left-menu', 'container' => 'false')); ?>
      </div><!-- /.page__menu -->
      <div class="page__content">

        <div class="cards">

          <div class="card__item">
            <a href="/moving-services/local/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/1.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Local Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>Computer users and programmers have become so accustomed to using.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/longdistance/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/2.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Long Distance Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>Computer users and programmers have become so accustomed to using.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/international/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/3.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>International Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>These companies release their own versions of the operating systems.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/moving-labor/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/4.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Moving Labor</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>The simple fact that not one of these companies are close to competing.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/commercial-moving/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/5.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Commercial Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>Planning a commercial move requires a certain degree.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/corporate-relocation/">
                <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/6.png');">
                  <div class="card__description">
                    <div class="card__description-header">
                      <h2>Corporate Relocation</h2>
                    </div><!-- /.card__description-header -->
                    <div class="card__description-text">
                      <p>Many say LINUX is far better because it started as an Open Source software.</p>
                    </div><!-- /.card__description-text -->
                  </div><!-- /.card__description -->
                </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="/moving-services/government-and-military-moving/">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/7.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Government & Military Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>Then what accounts for the enormous difference in market share between.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

          <div class="card__item">
            <a href="">
              <div class="card-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/services/8.png');">
                <div class="card__description">
                  <div class="card__description-header">
                    <h2>Special Items Moving</h2>
                  </div><!-- /.card__description-header -->
                  <div class="card__description-text">
                    <p>Windows GUI is the OS; speed, efficiency and reliability, while the Linux GUI.</p>
                  </div><!-- /.card__description-text -->
                </div><!-- /.card__description -->
              </div><!-- /.card-box -->
            </a>
          </div><!-- /.card__item -->

        </div><!-- /.cards -->

      </div><!-- /.page__content -->
    </div><!-- /.page-box -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
