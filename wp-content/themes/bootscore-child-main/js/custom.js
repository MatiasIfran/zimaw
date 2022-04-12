jQuery(document).ready(function ($) {

    //cards
    jQuery('#block_4').find('#btn-1').click(function (){
        jQuery('#block_4').find('#elements_card_1').hide();
        jQuery('#block_4').find('#btn-1').attr("style", "display: none !important");
    });

    jQuery('#block_4').find('#btn-2').click(function (){
        jQuery('#block_4').find('#elements_card_2').hide();
        jQuery('#block_4').find('#btn-2').attr("style", "display: none !important");
    });

    jQuery('#block_4').find('#btn-3').click(function (){
        jQuery('#block_4').find('#elements_card_3').hide();
        jQuery('#block_4').find('#btn-3').attr("style", "display: none !important");
    });

    jQuery('#block_4').find('#btn-4').click(function (){
        jQuery('#block_4').find('#elements_card_4').hide();
        jQuery('#block_4').find('#btn-4').attr("style", "display: none !important");
    });

    //finish card 

    
    //table
    // jQuery(this).find('.title_table').hide();

    // jQuery('#block_5').find('#button_show').click(function () {
    //     jQuery('#block_5').find('.title_table').show();
    //     jQuery('#block_5').find('.container').css('background', 'none');
    //     jQuery(this).hide();
    // });

    // jQuery('#block_5').find('th.header_1').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})
    // jQuery('#block_5').find('th.header_2').css({'border-top': '5px solid #8000B7','border-radius': '6px 6px 0px 0px'})
    // jQuery('#block_5').find('th.header_3').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})
    // jQuery('#block_5').find('th.header_4').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})

    // jQuery('#block_5').find('td.element_0').css('border', '1px solid var(--unnamed-color-707070)');
    // jQuery('#block_5').find('th.0').css('border', '1px solid var(--unnamed-color-707070)');
    
});