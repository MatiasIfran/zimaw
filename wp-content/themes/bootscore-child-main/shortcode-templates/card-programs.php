<div class="container h-100">

    <h2 class='title_block_four my-5'><?php echo get_field('title_block_4')?></h2>

    <div class="row">
        <div class="col-sm-6 col-xl-3 d-flex">
            <div class="card shadow p-4 mb-5 rounded">
                <h2 class="card-title text-center"><?php echo get_field('card_1')['title_card']?></h2>
                <h4 class="card-subtitle text-center"><?php echo get_field('card_1')['sub_title_card']?></h4>
                <div class="card-body ">
                    <div id="elements_card_1"><?php echo get_field('card_1')['elements_card']?></div>
                    <div class="full_elements_card collapse"  id="full_elements_card_1"><?php echo get_field('card_1')['full_elements_card']?></div>
                </div>
                <a id="btn-1" class="btn btn-secondary learn_more mb-4 d-flex align-items-center" data-bs-toggle="collapse" href="#full_elements_card_1" role="button" aria-expanded="false" aria-controls="full_elements_card_1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_learn_more')?></a>
                <a id="btn-1-close" class="btn btn-secondary learn_more close mb-4 align-items-center" href="#elements_card_1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_close')?></a> 
                <h2 class="price text-center py-2"><?php echo get_field('card_1')['price_card']?></h2>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 d-flex">
            <div class="card border-primary shadow p-4 mb-5 rounded" id="most_popular">
                <h2 class="card-title text-center"><?php echo get_field('card_2')['title_card']?></h2>
                <h4 class="card-subtitle text-center"><?php echo get_field('card_2')['sub_title_card']?></h4>
                <div class="card-body">
                    <div id="elements_card_2"><?php echo get_field('card_2')['elements_card']?></div>
                    <div class="full_elements_card collapse" id="full_elements_card_2" ><?php echo get_field('card_2')['full_elements_card']?></div>
                </div>
                <a id="btn-2" class="btn btn-secondary learn_more mb-4 d-flex align-items-center" data-bs-toggle="collapse" href="#full_elements_card_2" role="button" aria-expanded="false" aria-controls="full_elements_card_2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_learn_more')?></a>
                <a id="btn-2-close" class="btn btn-secondary learn_more close mb-4 align-items-center" href="#elements_card_2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg>
                <?php echo get_field('button_close')?></a> 
                <h2 class="price text-center py-2"><?php echo get_field('card_2')['price_card']?></h2>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 d-flex">
            <div class="card shadow p-4 mb-5  rounded">
                <h2 class="card-title text-center"><?php echo get_field('card_3')['title_card']?></h2>
                <h4 class="card-subtitle text-center"><?php echo get_field('card_3')['sub_title_card']?></h4>
                <div class="card-body ">
                    <div id="elements_card_3"><?php echo get_field('card_3')['elements_card']?></div>
                    <div class="full_elements_card collapse" id="full_elements_card_3"><?php echo get_field('card_3')['full_elements_card']?></div>
                </div>
                <a id="btn-3" class="btn btn-secondary learn_more mb-4 d-flex align-items-center" data-bs-toggle="collapse" href="#full_elements_card_3" role="button" aria-expanded="false" aria-controls="full_elements_card_3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_learn_more')?></a>
                <a id="btn-3-close" class="btn btn-secondary learn_more close mb-4 align-items-center" href="#elements_card_3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg>
                <?php echo get_field('button_close')?></a> 
                <h2 class="price text-center py-2"><?php echo get_field('card_3')['price_card']?></h2>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 d-flex">
            <div class="card shadow p-4 mb-5  rounded">
                <h2 class="card-title text-center"><?php echo get_field('card_4')['title_card']?></h2>
                <h4 class="card-subtitle text-center"><?php echo get_field('card_4')['sub_title_card']?></h4>
                <div class="card-body ">
                    <div id="elements_card_4"><?php echo get_field('card_4')['elements_card']?></div>
                    <div class="full_elements_card collapse" id="full_elements_card_4"><?php echo get_field('card_4')['full_elements_card']?></div>
                </div>
                <a id="btn-4" class="btn btn-secondary learn_more mb-4 d-flex align-items-center"  data-bs-toggle="collapse" href="#full_elements_card_4" role="button" aria-expanded="false" aria-controls="full_elements_card_4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_learn_more')?></a>
                <a id="btn-4-close" class="btn btn-secondary learn_more close mb-4 align-items-center" href="#elements_card_4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-fill me-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <?php echo get_field('button_close')?></a> 
                <h2 class="price text-center py-2"><?php echo get_field('card_4')['price_card']?></h2>
            </div>
        </div>
    </div>
    <h4 class="text-center info_price">*Priser i Dkk (EX moms)</h4>
</div>