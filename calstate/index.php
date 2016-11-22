<?php

get_header(); ?>

<div class="headline" style="background-image: url('<?php echo get_field('blog_bg_img-page'); ?>');">
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
    <div class="blog-page">
      <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    	<?php if( have_posts() ): ?>

        <div class="blog-list">
          <?php while( have_posts() ): the_post(); ?>

          <a href="<?php the_permalink(); ?>">
            <div class="blog__post" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo get_field('post_bg_img-blog'); ?>');">
              <div class="blog__card">
                <div class="blog__post-header">
                  <h2><?php the_title(); ?></h2>
                </div><!-- /.blog__post-header -->
                <div class="blog__post-footer">
                  <div class="post-date" title="at <?php the_time() ?>"><?php the_time('m.d.y') ?></div><!-- /.post-date -->
                </div><!-- /.blog__post-footer -->
              </div><!-- /.blog__card -->
            </div><!-- /.blog__post blog__post1 -->
          </a>

          <?php endwhile; ?>

        </div><!-- /.blog-list -->

        <nav class="blog-navigation" style="display: none;">
          <ul class="pagination">
            <li class="pagination__item pagination__item-previous">
              <a href="#">
                <span class="ico-previous">&laquo;</span>
              </a>
            </li>
            <li class="pagination__item"><a href="#">1</a></li>
            <li class="pagination__item pagination__item-active"><a href="#">2</a></li>
            <li class="pagination__item"><a href="#">3</a></li>
            <li class="pagination__item"><a href="#">4</a></li>
            <li class="pagination__item"><a href="#">5</a></li>
            <li class="pagination__item"><span>...</span></li>
            <li class="pagination__item"><a href="#">15</a></li>
            <li class="pagination__item pagination__item-next">
              <a href="#">
                <span class="ico-next">&raquo;</span>
              </a>
            </li>
            <li class="pagination__item pagination__item-last">
              <a href="#">
                <span class="ico-last">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

        <?php else: ?>

      	<?php endif; wp_reset_query(); ?>

    </div><!-- /.blog-page -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->


<?php get_footer(); ?>
