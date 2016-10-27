<?php
/**
 * Template Name: FAQ page
 */

get_header(); ?>
<div class="headline" style="background-image: url('<?php echo get_field('faq_bg_img-page'); ?>');">
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
    <div class="faq-page">
      <div class="faq">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div><!-- /.faq -->
      <div class="faq-add">
        <h2>Your question is not listed?<br>Write to us and our manager will answer you.</h2>
        <a class="add-question-modal" href="#add-faq">ASK <span>A QUESTION</span></a>
      </div><!-- /.add-q -->
    </div><!-- /.faq-page -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->

<div id="add-faq" class="zoom-anim-dialog mfp-hide">
  <div class="add-question">
    <h2>Adding a question</h2>
    <div class="add-question-form">
      <form action="" class="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name">
        </div><!-- /.form-group -->
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email">
        </div><!-- /.form-group -->
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
        </div><!-- /.form-group -->
        <div class="form-group form-group-btn">
          <button type="submit" class="button form-buttom">TO <span>SEND</span></button><!-- /.button form-buttom -->
        </div><!-- /.form-control -->
      </form><!-- /.get -->
    </div><!-- /.add-question-form -->
	</div><!-- /.add-question -->
  <button title="Close (Esc)" type="button" class="mfp-close _mfp-close"><svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg"><path d="M25.314 2.352L2.719 24.946m22.595.034L2.719 2.384" stroke="#ffffff" stroke-width="3" fill="none" stroke-linecap="square"/></svg></button>
</div>


<?php get_footer(); ?>
