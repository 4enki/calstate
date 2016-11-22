    <footer class="footer">
      <div class="box">
        <div class="footer-box">
          <div class="footer__wrapper">

            <div class="footer__item">
              <div class="footer__item-box footer__item-box__totop">
                <div class="footer-logo">
                  <?php if( is_home() || is_front_page() ) { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="CalState — #1 Los Angeles Moving Service" width="162" height="57">
                  <?php } else { ?>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="CalState — #1 Los Angeles Moving Service" width="162" height="57"></a>
                  <?php } ?>
                </div>
                <div class="copyright">
                  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Подвал, копирайт") ) : endif; ?>
                </div>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

            <div class="footer__item">
              <div class="footer__item-box footer__item-box__totop">
                <?php wp_nav_menu( array ('menu' => 'footer-menu-main', 'menu_class' => 'footer-menu', 'container' => 'false')); ?>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

            <div class="footer__item">
              <div class="footer__item-box">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Подвал, блок Moving Services") ) : endif; ?>
                <?php wp_nav_menu( array ('menu' => 'footer-menu-moving', 'menu_class' => 'footer-menu', 'container' => 'false')); ?>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

            <div class="footer__item">
              <div class="footer__item-box">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Подвал, блок Storage Services") ) : endif; ?>
                <?php wp_nav_menu( array ('menu' => 'footer-menu-storage', 'menu_class' => 'footer-menu', 'container' => 'false')); ?>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

            <div class="footer__item">
              <div class="footer__item-box">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Подвал, блок Buy Supplies") ) : endif; ?>
                <?php wp_nav_menu( array ('menu' => 'footer-menu-buy', 'menu_class' => 'footer-menu', 'container' => 'false')); ?>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

            <div class="footer__item footer__item-right">
              <div class="footer__item-box">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Подвал, правый блок") ) : endif; ?>
              </div><!-- /.footer__item-box -->
            </div><!-- /.footer__item -->

          </div><!-- /.footer__wrapper -->

          <div class="footer__mail-box" style="display: none;">
            <div class="subscribe">
              <form action="" class="form-mail subscribe-mail">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter email">
                </div><!-- /.form-group -->
                <div class="form-group form-group-btn">
                  <button class="form-button"><span class="i-right">GO!</span></button>
                </div><!-- /.form-group -->
              </form><!-- /.subscribe-mail -->
            </div><!-- /.subscribe -->
          </div>

        </div><!-- /.footer-box -->
      </div><!-- /.box -->
    </footer>

    <?php wp_footer(); ?>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/scripts.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/vendor.js"></script>
  </body>
</html>
