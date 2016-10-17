<?php
/**
 * Template Name: Blog index page
 */

get_header(); ?>

<div class="headline headline-blog">
  <div class="box">
    <div class="headline__wrapper">
      <h1>Blog</h1>
    </div><!-- /.headline__wrapper -->
    <div class="headline__footer">
      <div class="breadcrumbs">
        <span class="breadcrumbs__item">HOME</span>
        <span class="breadcrumbs__devider">/</span>
        <span class="breadcrumbs__item">Blog</span>
      </div>
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
          <div class="blog__post" id="post-<?php the_ID(); ?>">
            <div class="blog__post-header">
              <h2><?php the_title(); ?></h2>
            </div><!-- /.blog__post-header -->
            <div class="blog__post-footer">
              <div class="post-date"><?php the_time('F jS, Y'); ?></div><!-- /.post-date -->
            </div><!-- /.blog__post-footer -->
          </div><!-- /.blog__post blog__post1 -->
        </a>

        <?php endwhile; ?>

      </div><!-- /.blog-list -->

      <nav class="blog-navigation">
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

    </div><!-- /.blog-page -->
  </div><!-- /.box -->
</div><!-- /.page-wrapper -->




		<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
		</div><!-- /.navigation -->

	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>



	<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
