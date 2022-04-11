jQuery(document).ready(function ($) {

    //table
    jQuery(this).find('.title_table').hide();

    jQuery('#block_5').find('#button_show').click(function () {
        jQuery('#block_5').find('.title_table').show();
        jQuery('#block_5').find('.container').css('background', 'none');
        jQuery(this).hide();
    });

    jQuery('#block_5').find('th.header_1').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})
    jQuery('#block_5').find('th.header_2').css({'border-top': '5px solid #8000B7','border-radius': '6px 6px 0px 0px'})
    jQuery('#block_5').find('th.header_3').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})
    jQuery('#block_5').find('th.header_4').css({'border-top': '5px solid #EAEAEA','border-radius': '6px 6px 0px 0px'})

    jQuery('#block_5').find('td.element_0').css('border', '1px solid var(--unnamed-color-707070)');
    jQuery('#block_5').find('th.0').css('border', '1px solid var(--unnamed-color-707070)');
    
    console.log(  jQuery('#block_5').find('td.0'))
});