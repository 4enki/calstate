<?php
/**
 * Template Name: FAQ page
 */

get_header(); ?>
<div class="headline headline-faq">
  <div class="box">
    <div class="headline__wrapper">
      <h1>Blog</h1>
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
        <a href="">ASK <span>A QUESTION</span></a>
      </div><!-- /.add-q -->
    </div><!-- /.faq-page -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
