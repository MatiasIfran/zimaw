<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer>

  <div id="footer_child" class="bootscore-footer py-5">
    <div class="container">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <div>
          <?php dynamic_sidebar('top footer'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div id="footer_1" class="col-12 col-md-6">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <div>
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
        </div>
        
      <?php  if($post != null): ?>
        <div id="footer_4" class="col-12 col-md-6 d-flex justify-content-md-end">
          <?php if($post->post_name == 'english'): ?>
            <div>
              <h4>The services you need are <span>here!</span></h4>
            </div>
          <?php else: ?>  
            <div>
              <h4>De tjenester, du har brug for, <span>er her!</span></h4>
            </div>
          <?php endif; ?>
        </div>
      <?php else: ?>
        <div id="footer_4" class="col-12 col-md-6 d-flex justify-content-md-end">
          <div>
            <h4>De tjenester, du har brug for, <span>er her!</span></h4>
          </div> 
      </div>
      <?php endif; ?>
        <!-- Footer Widgets End -->

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth' => 1,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>
      <!-- Bootstrap 5 Nav Walker Footer Menu End -->

    </div>
  </div>
</footer>

<!-- <div class="top-button position-fixed zi-1020">
  <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>
</div> -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>