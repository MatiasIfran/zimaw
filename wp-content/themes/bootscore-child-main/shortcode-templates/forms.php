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
    <a id="button_up" href="#" class="btn btn-primary p-3 d-flex align-items-center flex-column"><svg style="color: #fff"
            xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-up-circle"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>UP</a>
</div>