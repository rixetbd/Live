$('.special.cards .image').dimmer({
    on: 'hover'
});

$('#card_01').click(function(){
    regular_service_effect('#card_01');

    $('#card_02_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_01_view').removeClass('d-none');
    $('#card_01_view').addClass('animate__animated animate__fadeIn');
});

$('#card_02').click(function(){
    regular_service_effect('#card_02');

    $('#card_01_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_02_view').removeClass('d-none');
    $('#card_02_view').addClass('animate__animated animate__fadeIn');


});

$('#card_03').click(function(){
    regular_service_effect('#card_03');

    $('#card_01_view').addClass('d-none');
    $('#card_02_view').addClass('d-none');
    $('#card_04_view').addClass('d-none');
    $('#card_03_view').removeClass('d-none');
    $('#card_03_view').addClass('animate__animated animate__fadeIn');

});

$('#card_04').click(function(){
    regular_service_effect('#card_04');

    $('#card_01_view').addClass('d-none');
    $('#card_02_view').addClass('d-none');
    $('#card_03_view').addClass('d-none');
    $('#card_04_view').removeClass('d-none');
    $('#card_04_view').addClass('animate__animated animate__fadeIn');

});

function regular_service_effect(id){
    $('.service_preview').removeClass('d-none');
    $('.arrow_down').addClass('d-none');
    $('.content_color').removeClass('card_bg');
    $(id).find('.content_color').addClass('card_bg');
    $(id).find('.arrow_down').removeClass('d-none');
}

$('#service_preview_close').click(function(){
    $('.service_preview').addClass('d-none');
    $('.arrow_down').addClass('d-none');
    $('.content_color').removeClass('card_bg');
    // alert('hi');
})

let child_box = document.querySelectorAll('.child_box');
let child_box_sub = document.querySelectorAll('.child_box_sub');


// child_box_sub[1].classList.add("d-none");


for (let i = 0; i < child_box.length; i++) {
    child_box[i].addEventListener('click', function(){
        for (let n = 0; n < child_box_sub.length; n++) {
            child_box_sub[n].classList.add('d-none');
            child_box[n].classList.remove('bg-dark');
            child_box[n].classList.remove('text-light');
            // child_box[n].parentElement.classList.remove('d-none');
        }
        // this.parentElement.classList.add('d-none');
        child_box_sub[i].classList.remove('d-none');
        child_box[i].classList.add('bg-dark');
        child_box[i].classList.add('text-light');
    });
}


// Service Buttons Hover || Event || Start
// $('.service_btns_see_more').mouseover(function(){

//  $('.service_btns').removeClass('service_btns_overflow');

// });
// Service Buttons Hover || Event || End

// let serviceH3 = $('#service_list_description h3').length; 
// let single_service_sub_navData = "";
// for (let n = 0; n < serviceH3; n++) {
//     let name = $(`#service_list_description h3:eq(${n})`).html();
//     let nameID = name.replace(/ /g,'').toLowerCase();
//     $(`#service_list_description h3:eq(${n})`).attr('id', `${nameID}`);
//     single_service_sub_navData += `<a href="#${nameID}">${name}</a>`;
// }
// $('#single_service_sub_nav').html(single_service_sub_navData + `<a href="#compare_packages">Compare Packages</a>`);



// $('#single_service_sub_nav a').css({top:'50%',left:'50%',margin:'-'+($('#single_service_sub_nav a').height() / 2)+'px 0 0 -'+($('#single_service_sub_nav a').width() / 2)+'px'});


// 25 Oct 2022 || Scroll MidDev || Start
// $(function() {
//     // scroll to fruits on click of navigation
//     $("#single_service_sub_nav li").click(function() {
//         // initialize
//         let activeClass = "active";
//         let index = $(this).data("index");
//         let element = $('.sct_content div[data-index="' + index + '"]');
//         let parentDiv = $(".sct_content");

//         // check if already active
//         if ($(this).hasClass(activeClass)) {
//             return;
//         }
//         // add and remove classes
//         $("li").removeClass(activeClass);
//         $(this).addClass(activeClass);
//         element.addClass(activeClass);

//         // lets scroll
//         $(".sct_content").animate(
//             {
//                 scrollTop:
//                     parentDiv.scrollTop() +
//                     element.position().top -
//                     500
//             },
//             100
//         );
//     });
// });

// $(".btn_overview").click(function() {
//     $('html,body').animate({scrollTop: $("#overview").offset().top - 360},'slow', 'swing');
// });
$(".service_list_description").click(function() {
    $('html,body').animate({scrollTop: $("#service_list_description").offset().top - 360},'slow', 'swing');
});
$(".why_choose_dimarz").click(function() {
    $('html,body').animate({scrollTop: $("#why_choose_dimarz").offset().top - 360},'slow', 'swing');
});
$(".service_faq").click(function() {
    $('html,body').animate({scrollTop: $("#service_faq").offset().top - 360},'slow', 'swing');
});

// $("#btnExample2").click(function() {
//     $('html,body').animate({
//         scrollTop: $("#example2").offset().top -50},
//         'slow', 'swing');
// });
// 25 Oct 2022 || Scroll MidDev || End


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});

// Auto Service || Start
function ServiceNameClick_auto() {
    $.ajax({
        type: 'POST',
        url: `/servicedetailsauto`,
        data: {
            'id': `1`
        },
        success: function (data) {
            $(`#service_list_description`).html(' ');
            $('#service_list_title').html(`<span style="font-size:30px;">${data.service.title} </span>`); // <span style="font-size:14px;"></span>
            $('#service_first_one').html(data.service.title);
            $('#service_first_two').html(data.service_category);
            $('#overview').html(data.service.overview);
            $('#service_list_description').html(data.service.description);
            $('#why_choose_dimarz').html(data.service.why_choose_dimarz);
            $('#service_faq').html(data.service.faq);
            $('#img_replace img').attr('src',data.service_img);

            $('#card_badge').html(data.packageData);
            $('#card_badge .col:first').addClass('active');
            $('#ser_pack_title').html(data.package[0]['title']);
            $('#ser_pack_description').html(data.package[0]['description']);
            $('#ser_pack_active').html(data.packageListData);

            $('#confirm_order_btn').attr('href', data.confirm_order_link);
            $('#confirm_order_btn_pack_0').attr('href', data.confirm_order_link);
            $('#confirm_order_btn_pack_1').attr('href', data.confirm_order_link_2);
            $('#confirm_order_btn_pack_2').attr('href', data.confirm_order_link_3);

            $('#ser_pack_price').html(data.package[0]['price']);
            $('#price_pack_0').html("US $ " + data.package[0]['price']);
            $('#price_pack_1').html("US $ " + data.package[1]['price']);
            $('#price_pack_2').html("US $ " + data.package[2]['price']);

            $('#ser_pack_duration').html(data.package[0]['duration']);
            $('#delivery_time_0').html(data.package[0]['duration']+' Days');
            $('#delivery_time_1').html(data.package[1]['duration']+' Days');
            $('#delivery_time_2').html(data.package[2]['duration']+' Days');
            
            $('#packages_description_01').html(data.package[0]['description']);
            $('#packages_description_02').html(data.package[1]['description']);
            $('#packages_description_03').html(data.package[2]['description']);

        }
    });
}
ServiceNameClick_auto();
// Auto Service || End