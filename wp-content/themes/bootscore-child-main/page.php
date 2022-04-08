<?php

/**
 * Template Name: Blank with container
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content container">
  <div id="primary" class="content-area">
    
    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

      <div class="entry-content">
      <section id="rectangle_one" class="height-100 py-5 width-100">
        <div class="container h-100 d-flex align-items-center justify-content-star">
          <div class="element">
            <h1 class="title"><?php echo get_field('english_home_title')?></h1>
            <h1 class="subtitle"><?php echo get_field('english_home_subtitle')?></h1>
            <button class="btn btn-secondary learn_more" href="<?php echo get_field('learn_more_button')['url']?>" target="<?php echo get_field('learn_more_button')['target']?>"><?php echo get_field('learn_more_button')['title']?></button>
            <button class="btn btn-primary contact_us" href="<?php echo get_field('Contact_us_button')['url']?>" target="<?php echo get_field('Contact_us_button')['target']?>"><?php echo get_field('Contact_us_button')['title']?></button>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-down-circle d-flex justify-content-start" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
      </section>
        <?php the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(array(
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
          'after'  => '</div>',
        ));
        ?>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
