<div class="container">
    <h2 class='title_solutions'><?php echo get_field('title_block_solution')?></h2>
    <h4 class='sub_title_solutions'><?php echo get_field('sub_title_block_solution')?></h4>

    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card card-border shadow p-4 mb-5 rounded">
                <div class="card-body">
                    <h2 class="card-title text-center"><?php echo get_field('card_1_solutions')['title_card']?></h2>
                    <div class="elements_card"><?php echo get_field('card_1_solutions')['elements_card']?></div>
                    <hr>
                    <div class="information_elements_card mt-4">
                        <?php echo get_field('card_1_solutions')['information_elements_card']?></div>
                    <div class="d-flex justify-content-center"><a class="btn btn-secondary  my-4"
                            href="<?php echo (get_field('card_1_solutions')['button_contact_us'])['url']?>"
                            target="<?php echo (get_field('card_1_solutions')['button_contact_us'])['target']?>"><?php echo (get_field('card_1_solutions')['button_contact_us'])['title']?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card card-border-purple shadow p-4 mb-5 rounded">
                <div class="card-body">
                    <h2 class="card-title text-center"><?php echo get_field('card_2_solutions')['title_card']?></h2>
                    <div class="elements_card"><?php echo get_field('card_2_solutions')['elements_card']?></div>
                    <hr>
                    <div class="information_elements_card mt-4">
                        <?php echo get_field('card_2_solutions')['information_elements_card']?></div>
                    <div class="d-flex justify-content-center"><a class="btn btn-secondary  my-4"
                            href="<?php echo (get_field('card_2_solutions')['button_contact_us'])['url']?>"
                            target="<?php echo (get_field('card_2_solutions')['button_contact_us'])['target']?>"><?php echo (get_field('card_1_solutions')['button_contact_us'])['title']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="information_asterisk text-center p-sm-5">
        <h2><?php echo get_field('information_with_asterisk')?></h2>
    </div>

    <div class="card shadow p-4 mb-5 rounded card-contact-us">
        <div class="card-body text-center">
            <h2 class="title_contact_us"><?php echo get_field('card_contact_us')['title_card_contact_us']?></h2>
        </div>
    </div>
    <a class="btn btn-secondary button-card-contact"
        href="<?php echo (get_field('card_contact_us')['button_contact_us'])['url']?>"
        target="<?php echo (get_field('card_contact_us')['button_contact_us'])['target']?>"><?php echo (get_field('card_contact_us')['button_contact_us'])['title']?></a>


    <p class="information_solution"><?php echo get_field('information_solution')?></p>
</div>