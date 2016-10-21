<?php
/**
 * Template Name: Contacts page
 */

get_header(); ?>

<div class="headline headline-contacts" style="background-image: url('<?php echo get_field('contacts_bg_img-page'); ?>');">
  <div class="box">
    <div class="headline__wrapper">
      <h1><?php the_title(); ?></h1>
    </div><!-- /.headline__wrapper -->
    <div class="headline__footer">
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- /.headline__footer -->
  </div><!-- /.box -->
</div><!-- /.headline -->

<div class="contacts">
  <div class="contacts__wrapper">
    <div id="map"></div>
    <div class="contacts__info-box">
      <div class="adress">
        <div class="adress__item">
          <div class="adress__item-subtitle">Adress:</div><!-- /.adress__item-subtitle -->
          <div class="adress__item-text"><?php echo get_field('contacts_adress'); ?></div><!-- /.adress__item-text -->
        </div><!-- /.adress__item -->
        <div class="adress__item">
          <div class="adress__item-subtitle">Email:</div><!-- /.adress__item-subtitle -->
          <div class="adress__item-text"><?php echo get_field('contacts_email'); ?></div><!-- /.adress__item-text -->
        </div><!-- /.adress__item -->
        <div class="adress__item">
          <div class="adress__item-subtitle">Phone:</div><!-- /.adress__item-subtitle -->
          <div class="adress__item-text">
            <?php echo get_field('contacts_phones'); ?>
          </div><!-- /.adress__item-text -->
        </div><!-- /.adress__item -->
      </div><!-- /.adress -->
    </div><!-- /.contacts__info-box -->
    <div class="contacts__form _contacts__form">
      <div class="contacts__form-close _contacts__form-close">
        <div class="i-cross">Закрыть это всё!</div>
      </div><!-- /.contacts__form-close -->
      <div class="contacts-form-box">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div><!-- /.contacts-form-box -->
    </div><!-- /.contacts__form -->
  </div><!-- /.contacts__wrapper -->
</div><!-- /.contacts -->

<?php get_footer(); ?>
