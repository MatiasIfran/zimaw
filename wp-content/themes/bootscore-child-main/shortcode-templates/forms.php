<div class="container h-100 py-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center">
            <h2 class='title_block_seven w-md-75'><?php echo get_field('title_block_7')?></h2>
        </div>
        <div class='col-md-6 background-form d-flex justify-content-center'>
            <div class="contact_form">
                <?php echo do_shortcode( get_field('shortcode_forms'))?>
            </div>
        </div>
    </div>
</div>