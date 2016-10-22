<?php
/**
 * Template Name: Special Offers
 */

get_header(); ?>

<div class="headline headline-special" style="background-image: url('<?php echo get_field('special_bg_img-page'); ?>');">
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
    <div class="special">
      <div class="special-list">

        <div class="special__row special__row-top">

          <div class="special-col8">
            <div class="special-box special-box-info">
              <div class="special-box-info__description">
                <h2>Headset No Longer Wired For Sound.</h2>
                <p>If you are in the market for a computer, there are a number of factors to consider. Will it be used for your home, your office or perhaps even your home office combo? First off, you will need to set a budget for your new purchase before deciding whether to shop for notebook or desktop computers.</p>
              </div><!-- /.special-box__description -->
            </div>
          </div><!-- /.special-col8 -->

          <div class="special-col4">
            <div class="special-box special-box-sale">
              <div class="box-sale__header">
                <div class="box-sale__header-big">15 % <span>Sale</span></div>
                <div class="box-sale__header-sub">2 MOVERS &amp; <span>TRUCK</span></div>
              </div>
              <div class="sales-box">
                <div class="sales-box__item">12</div>
                <div class="sales-box__item sales-box__item-center">40</div>
                <div class="sales-box__item">25</div>
              </div>
            </div>
          </div><!-- /.special-col4 -->

        </div><!-- /.special__row -->

        <div class="special__row">

          <div class="special-col4">
            <div class="special-box special-box-helping">
              <img src="assets/images/helping.png" alt="">
              <h2>Helping people with disabilities to move <span>FREE</span>.</h2>
            </div>
          </div><!-- /.special-col4 -->

          <div class="special-col8">
            <div class="special-box special-box-tomove">
              <div class="special-box-tomove__description">
                <h2>Time to <br>move.</h2>
                <p>First off, you will need to set a budget for your new purchase before deciding whether to shop for notebook or desktop computers.</p>
              </div>
            </div>
          </div><!-- /.special-col8 -->

        </div><!-- /.special__row -->

      </div><!-- /.special-list -->
    </div><!-- /.special -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->

<?php get_footer(); ?>
