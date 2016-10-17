<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="headline headline-blog-single" style="background-image: url('<?php echo get_field('post_bg_img'); ?>');">
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

    <div class="page-wrapper">
      <div class="box">
        <div class="blog-post" id="post-<?php the_ID(); ?>">
          <div class="blog-post-content">
            <div class="post-meta">
              <span class="post-date"><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></span>
            </div>
            <?php the_content(); ?>
          </div><!-- /.blog-post-content -->
        </div><!-- /.blog-post -->
      </div><!-- /.box -->
    </div><!-- /.page-wrapper -->

  <?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>

<?php get_footer(); ?>
