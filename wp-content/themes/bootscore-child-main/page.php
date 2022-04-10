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
      <section id="rectangle_one" class="height-100 py-5 width-100 bg-light">
        <div></div>
        <div class="container h-100 d-flex align-items-center justify-content-star">
          <div class="element">
            <h1 class="title"><?php echo get_field('home_title')?></h1>
            <h1 class="subtitle"><?php echo get_field('home_subtitle')?></h1>
            <button class="btn btn-secondary learn_more" href="<?php echo get_field('learn_more_button')['url']?>" target="<?php echo get_field('learn_more_button')['target']?>"><?php echo get_field('learn_more_button')['title']?></button>
            <button class="btn btn-primary contact_us" href="<?php echo get_field('Contact_us_button')['url']?>" target="<?php echo get_field('Contact_us_button')['target']?>"><?php echo get_field('Contact_us_button')['title']?></button>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-down-circle d-flex justify-content-start" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
      </section>

      <section id="block_1" class="height-75">
        <div class="container h-100 text-center d-flex align-items-center align-self-center">
          <div>
            <h2 class='title_block_one'><?php echo get_field('title_block_1')?></h2>
            <h4 class='sub_title_block_one'><?php echo get_field('sub_title_block_1')?></h4>
          </div>
        </div>
      </section>

      <section id="block_2" class="height-100 width-100 bg-light">
        <div class="container h-100">
          <div class="row h-100">

            <div class="col-md-5 d-flex align-items-center">
              <h2 class='title_block_two'><?php echo get_field('title_block_2')?></h2>
            </div>
            <div class="col-md-7 d-flex align-self-center flex-column">
              <h4 class='text_one_block_2 mb-4'><?php echo get_field('text_one_block_2')?></h4>
              <h4 class='text_two_block_2 mb-4 p-4'><?php echo get_field('text_two_block_2')?></h4>
              <h4 class='text_three_block_2'><?php echo get_field('text_three_block_2')?></h4>
            </div>
            
          </div>
        </div>
      </section>

      <section id="block_3" class="height-100 width-100">
        <div class="container">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 class='title_block_two'><?php echo get_field('title_block_2')?></h2>
            </div>
            <div class="col">
              
            </div>
          </div>
        </div>
      </section>


        <!-- <?php the_post(); ?>
        <?php the_content(); ?> -->
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
