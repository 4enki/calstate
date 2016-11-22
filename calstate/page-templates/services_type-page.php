<?php
/**
 * Template Name: Services type page
 */

get_header(); ?>

<div class="headline headline-about" style="background-image: url('<?php echo get_field('services-long_bg_img-page'); ?>');">
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

        <div class="page__content-single">
          <div class="single">
            <div class="single__header" style="background-image: url('<?php echo get_field('services-long_bg_img-content'); ?>');"></div><!-- /.single__header single__header-bg -->
            <div class="single__content">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile; endif; ?>
            </div><!-- /.single__content -->
          </div><!-- /.single -->
        </div><!-- /.page__content-single -->

        <div class="page__content-right">
          <div class="get-box">
            <div class="get__header">
              <h2>GET A FREE QUOTE FOR <span>LONGDISTANCE MOVING</span></h2>
              <p>Get rates from CalState professional movers today.</p>
            </div><!-- /.get__header -->
            <div class="get__form">
              <form action="" class="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div><!-- /.form-group -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone Number">
                </div><!-- /.form-group -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                </div><!-- /.form-group -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Size Of Move">
                </div><!-- /.form-group -->
                <div class="form-groups form-groups-zip">
                  <div class="zip-header" style="display: none;">
                    <label>ZIP CODE:</label>
                  </div><!-- /.zip-header -->
                  <div class="form-group-inline">
                    <input type="text" class="form-control" placeholder="ZIP From">
                    <input type="text" class="form-control" placeholder="ZIP To">
                  </div><!-- /.form-group-inline -->
                </div>
                <!-- /.form-groups form-groups-zip -->
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
                </div><!-- /.form-group -->
                <div class="form-group form-group-btn">
                  <button type="submit" class="button form-buttom">SUBMIT <span>NOW</span></button><!-- /.button form-buttom -->
                </div><!-- /.form-control -->
              </form><!-- /.get -->
            </div><!-- /.get__form -->
          </div><!-- /.get-box -->
        </div><!-- /.page__content-right -->

      </div><!-- /.page__content -->
    </div><!-- /.page-box -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
