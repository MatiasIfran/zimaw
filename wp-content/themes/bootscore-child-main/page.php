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

      <section id="block_3" class="height-75 width-100">
        <div class="container h-100 pt-5">
          
            <h2 class='title_block_three my-5'><?php echo get_field('title_block_3')?></h2>

            <div class="row">
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5  rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"/><g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/></g></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_1')?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5  rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6h18V4H4c-1.1 0-2 .9-2 2v11H0v3h14v-3H4V6zm19 2h-6c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zm-1 9h-4v-7h4v7z"/></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_2')?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5  rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" height="24px" width="24px"  viewBox="0 0 512 512"><title>Analytics</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M344 280l88-88M232 216l64 64M80 320l104-104"/><circle cx="456" cy="168" r="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="320" cy="304" r="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="208" cy="192" r="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="56" cy="344" r="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_3')?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5  rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16"><path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_4')?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5 rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_5')?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow p-4 mb-5  rounded">
                  <div class="card-body d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ionicon" viewBox="0 0 512 512"><title>Paper Plane</title><path d="M53.12 199.94l400-151.39a8 8 0 0110.33 10.33l-151.39 400a8 8 0 01-15-.34l-67.4-166.09a16 16 0 00-10.11-10.11L53.46 215a8 8 0 01-.34-15.06zM460 52L227 285" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    <h5 class="card-title ps-3 align-self-center"><?php echo get_field('element_to_table_6')?></h5>
                  </div>
                </div>
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
