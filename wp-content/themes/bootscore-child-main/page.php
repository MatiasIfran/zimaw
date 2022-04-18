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

<div class="wp-block-cover is-light"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay=""
        muted="" loop="" playsinline="" src="<?php echo get_field('url_video')?>" data-object-fit="cover"></video>
    <div class="wp-block-cover__inner-container">
        <section id="rectangle_one" class="">
            <div class="container h-75 d-flex align-items-end">
                <div class="element d-flex text-md-center">
                    <a class="btn btn-secondary me-4 mt-4 learn_more d-flex align-items-center justify-content-center"
                        href="<?php echo get_field('learn_more_button')['url']?>"
                        target="<?php echo get_field('learn_more_button')['target']?>"><?php echo get_field('learn_more_button')['title']?></a>
                    <a class="btn btn-primary contact_us mt-4 d-flex align-items-center justify-content-center" href="<?php echo get_field('Contact_us_button')['url']?>"
                        target="<?php echo get_field('Contact_us_button')['target']?>"><?php echo get_field('Contact_us_button')['title']?></a>
                </div>
                <a href="#block_1" class="scroll_down"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-arrow-down-circle d-flex justify-content-start"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg>
                </a>
            </div>
        </section>
    </div>
</div>

<div id="content" class="site-content container">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

            <div class="entry-content">


                <section id="block_1">
                    <?php include dirname(__FILE__).'/shortcode-templates/presentation.php'?>
                </section>

                <section id="block_2" class="width-100 bg-light">
                    <?php include dirname(__FILE__).'/shortcode-templates/why-enjoy.php'?>
                </section>

                <section id="block_3">
                    <?php include dirname(__FILE__).'/shortcode-templates/what-we-offer.php'?>
                </section>

                <section id="block_cards_plans">
                    <?php include dirname(__FILE__).'/shortcode-templates/card-programs.php'?>
                </section>

                <section id="block_table" class="width-100">
                    <?php include dirname(__FILE__).'/shortcode-templates/table.php'?>
                </section>

                <section id="block_social">
                    <?php include dirname(__FILE__).'/shortcode-templates/social.php'?>
                </section>

                <section id="block_services" class="width-100 bg-light">
                    <div class="container py-5">
                        <h2 class='title_services py-5'><?php echo get_field('text_we_adapt_services')?></h2>
                    </div>
                </section>

                <section id="block_solutions">
                    <?php include dirname(__FILE__).'/shortcode-templates/solutions.php'?>
                </section>

                <section id="block_6" class="width-100 bg-light">
                    <?php include dirname(__FILE__).'/shortcode-templates/we_work.php'?>
                </section>

                <section id="block_forms" class="width-100 pb-5">
                    <?php include dirname(__FILE__).'/shortcode-templates/forms.php'?>
                </section>
            </div>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();