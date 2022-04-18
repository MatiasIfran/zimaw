jQuery(document).ready(function ($) {

    //cards
    jQuery('#block_cards_plans').find('#btn-1').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_1').attr("style", "display: none");
        jQuery('#block_cards_plans').find('#full_elements_card_1').attr("style", "display: block");
        jQuery('#block_cards_plans').find('#btn-1').attr("style", "display: none !important");
        jQuery('#block_cards_plans').find('#btn-1-close').attr("style", "display: flex");
    });

    jQuery('#block_cards_plans').find('#btn-1-close').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_1').show();
        jQuery('#block_cards_plans').find('#full_elements_card_1').hide();
        jQuery('#block_cards_plans').find('#btn-1').attr("style", "display: flex");
        jQuery('#block_cards_plans').find('#btn-1-close').attr("style", "display: none");
    })

    jQuery('#block_cards_plans').find('#btn-2').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_2').attr("style", "display: none");
        jQuery('#block_cards_plans').find('#full_elements_card_2').attr("style", "display: block");
        jQuery('#block_cards_plans').find('#btn-2').attr("style", "display: none !important");
        jQuery('#block_cards_plans').find('#btn-2-close').attr("style", "display: flex");
    });

    jQuery('#block_cards_plans').find('#btn-2-close').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_2').show();
        jQuery('#block_cards_plans').find('#full_elements_card_2').hide();
        jQuery('#block_cards_plans').find('#btn-2').attr("style", "display: flex");
        jQuery('#block_cards_plans').find('#btn-2-close').attr("style", "display: none");
    })

    jQuery('#block_cards_plans').find('#btn-3').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_3').attr("style", "display: none");
        jQuery('#block_cards_plans').find('#full_elements_card_3').attr("style", "display: block");
        jQuery('#block_cards_plans').find('#btn-3').attr("style", "display: none !important");
        jQuery('#block_cards_plans').find('#btn-3-close').attr("style", "display: flex");
    });

    jQuery('#block_cards_plans').find('#btn-3-close').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_3').attr("style", "display: flex");
        jQuery('#block_cards_plans').find('#full_elements_card_3').attr("style", "display: none");
        jQuery('#block_cards_plans').find('#btn-3').attr("style", "display: flex");
        jQuery('#block_cards_plans').find('#btn-3-close').attr("style", "display: none");
    })

    jQuery('#block_cards_plans').find('#btn-4').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_4').attr("style", "display: none");
        jQuery('#block_cards_plans').find('#full_elements_card_4').attr("style", "display: block");
        jQuery('#block_cards_plans').find('#btn-4').attr("style", "display: none !important");
        jQuery('#block_cards_plans').find('#btn-4-close').attr("style", "display: flex");
    });

    jQuery('#block_cards_plans').find('#btn-4-close').click(function (){
        jQuery('#block_cards_plans').find('#elements_card_4').show();
        jQuery('#block_cards_plans').find('#full_elements_card_4').hide();
        jQuery('#block_cards_plans').find('#btn-4').attr("style", "display: flex");
        jQuery('#block_cards_plans').find('#btn-4-close').attr("style", "display: none");
    })

    //finish card 

    //table

    jQuery('#block_table').find('#button_show').click(function () {
        jQuery('#block_table').find('.table').css('opacity','1');
        jQuery('#block_table').find('#elements_hide').css('display','flex');
        jQuery('#block_table').find('.line_gradient').hide();
        jQuery('#block_table').find(jQuery( "tr" )).css('display', 'table-row');
        jQuery(this).hide();
    });

    jQuery('#block_table').find('#button_hide').click(function () {
        jQuery('#block_table').find('.table').css('opacity','0.71');
        jQuery('#block_table').find('#elements_hide').hide();
        jQuery('#block_table').find('#button_show').show();
        jQuery('#block_table').find('.line_gradient').show();
        jQuery('#block_table').find(jQuery( "tr" )).each(function(index) {
            if(index>4) { jQuery(this).hide()}
        });
    });


    jQuery('#block_table').find('th.header_1').css({'border-top': '5px solid #EAEAEA'})
    jQuery('#block_table').find('th.header_2').css({'border-top': '5px solid #8000B7'})
    jQuery('#block_table').find('th.header_3').css({'border-top': '5px solid #EAEAEA'})
    jQuery('#block_table').find('th.header_4').css({'border-top': '5px solid #EAEAEA'})

    // jQuery('#block_table').find('th.header_0').css({'border': '1px solid var(--unnamed-color-707070)', 'border-bottom': 'none'});
    // jQuery('#block_table').find('td.element_0').css({'border-left': '1px solid var(--unnamed-color-707070)', 'border-right': '1px solid var(--unnamed-color-707070)'});
  
    
});