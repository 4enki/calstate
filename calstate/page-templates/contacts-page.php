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
      <div class="breadcrumbs">
        <span class="breadcrumbs__item">HOME</span>
        <span class="breadcrumbs__devider">/</span>
        <span class="breadcrumbs__item">Moving Services</span>
      </div>
    </div><!-- /.headline__footer -->
  </div><!-- /.box -->
</div><!-- /.headline -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', init);
  function init() {
    var mapOptions = {
        zoom: 11,
        center: new google.maps.LatLng(34.087099, -118.181621),
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(34.087099, -118.301621),
        map: map,
        title: 'CalState!',
        icon: '<?php echo get_template_directory_uri(); ?>/assets/images/map-marker.png'
    });
  }
</script>

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
