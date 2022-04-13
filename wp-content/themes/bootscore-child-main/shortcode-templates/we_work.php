<div class="container ">
    <div class="row">

        <div class="col-md-4 d-flex align-items-center">
            <h2 class='title_block_six'><?php echo get_field('title_block_6')?></h2>
        </div>

        <div class="col-md-7 d-flex align-self-center flex-column">
            <div class="card mb-3 d-flex">
                <div class="row" style="margin-left: -6px;">
                    <div class="col-2 bookmark_svg"> 
                        <p class="bookmark_text"><span>1</span></p>
                    </div>  
                        <p class="col-10 text-left p-3 m-0"><?php echo get_field('text_one_block_6')?></p>
                </div>
            </div>
            <div class="card mb-3 d-flex">
                <div class="row" style="margin-left: -6px;">
                    <div class="col-2 bookmark_svg"> 
                        <p class="bookmark_text"><span>2</span></p>
                    </div>  
                        <p class="col-10 text-left p-3 m-0"><?php echo get_field('text_two_block_6')?></p>
                </div>
            </div>
            <div class="card mb-3 d-flex">
                <div class="row" style="margin-left: -6px;">
                    <div class="col-2 bookmark_svg"> 
                        <p class="bookmark_text"><span>3</span></p>
                    </div>  
                        <p class="col-10 text-left p-3 m-0"><?php echo get_field('text_three_block_6')?></p>
                </div>
            </div>
            <?php if(get_field('text_four_block_6')): ?>
                <div class="card mb-3 d-flex">
                <div class="row" style="margin-left: -6px;">
                    <div class="col-2 bookmark_svg"> 
                        <p class="bookmark_text"><span>4</span></p>
                    </div>  
                        <p class="col-10 text-left p-3 m-0"><?php echo get_field('text_four_block_6')?></p>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>