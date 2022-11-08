var pricing_main = $('#pricing').offset().top;  

$(window).on("scroll", function () {


    var currentScroll = $(window).scrollTop();

    if (currentScroll >= pricing_main) {

    // if ($(window).scrollTop() > 3600) {
        // alert($(window).scrollTop());
        $('#pricing').addClass('service_price_sticky_one');
        $('.service_menu_all').addClass('service_menu_all_fixed');
        $('.service_sub_menu_all').addClass('service_sub_menu_all_fixed');
        // $('#sub_serve').addClass('sub_serve');
        $('#sct_heading').addClass('sct_heading_fixed');
        // $('.service_col_three_main').addClass('service_col_three_main_fix');
        // $('.sct_content').addClass('sct_content_pt');

        // // Description || Event || Start
        // $(`#service_list_description`).removeClass('service_list_top');
        // // $(`#service_list_description`).addClass('service_list_top_15');
        // // window.location.href = `#service_list_description`;

        // $('#service_col_two').addClass('service_col_two');
        // Description || Event || End

    } else {
        $('#pricing').removeClass('service_price_sticky_one');
        $('.service_menu_all').removeClass('service_menu_all_fixed');
        $('.service_sub_menu_all').removeClass('service_sub_menu_all_fixed');
        $('#sub_serve').removeClass('sub_serve');
        $('#sct_heading').removeClass('sct_heading_fixed');
        $('.service_col_three_main').removeClass('service_col_three_main_fix');
        $('.sct_content').removeClass('sct_content_pt');
        $('#service_col_two').removeClass('service_col_two');

        // $(`#service_list_description`).removeClass('service_list_top');
    }

});