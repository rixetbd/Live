// ==================> Banner Slider || Start <==================
function banner_slider() {
    $('.slider').each(function () {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;
            advance();
            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }
            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');
            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }
            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function () {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }
        $('.next_btn').on('click', function () {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });
        $('.previous_btn').on('click', function () {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });
        $.each($slides, function (index) {
            var $button = $('<a class="slide_btn">&bull;</a>');
            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function () {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
}
// ==================> Banner Slider || End <==================


// ==================> Service Select Event || Start <==================
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});

$('#menu li').click(function () {
    $('#menu li').removeClass('active');
    $(this).addClass('active');
});



// function firstService() {
//     $.ajax({
//         type: 'POST',
//         url: `/getservicedata/first`,
//         data: {
//             'ServiceID': 'ServiceID'
//         },
//         success: function (data) {
//             $('#service_banner_slider').html(data.service_img);
//             $('#card_badge').html(data.packageData);
//             $('#card_badge .col:first').addClass('active');
//             $('#ser_pack_title').html(data.package[0]['title']);
//             $('#ser_pack_price').html("US $ " + data.package[0]['price']);
//             $('#ser_pack_description').html(data.package[0]['description']);
//             $('#ser_pack_duration').html(data.package[0]['duration']);
//             $('#ser_pack_active').html(data.packageListData);
//             banner_slider();
//         }
//     });
// }
// firstService();


function ServiceNameClick(ID, ClassName) {
    $.ajax({
        type: 'POST',
        url: `{{route('servicedetails')}}`,
        data: {
            'id': `${ID}`
        },
        success: function (data) {
            // $(`#service_list_description`).removeClass('service_list_top_15');
            // $(`#service_list_description`).addClass('service_list_top_2');
            // window.location.href = `#service_list_description`;
            $('#package_offer').html(' ')
            $(`#service_list_description`).html(' ');
            // alert(data.data.title);
            // alert(data.service['name']);
            // $("#msg").html(data.msg);
            // // alert(data.service.name);


            $('#service_list_title').html(`<span style="font-size:30px;">${data.service.title} </span>`); // <span style="font-size:14px;"></span>
            // $('#service_list_category').html(data.service_category);
            $('#overview').html(data.service.overview);
            $('#service_list_description').html(data.service.description);
            $('#why_choose_dimarz').html(data.service.why_choose_dimarz);
            $('#service_faq').html(data.service.faq);
            $('#img_replace img').attr('src',data.service_img);
            console.log(data.service_img);
            
            $('html,body').animate({scrollTop: $("#overview").offset().top - 360},'slow', 'swing');

            banner_slider2();
            $('#card_badge').html(data.packageData);
            $('#card_badge .col:first').addClass('active');
            $('#ser_pack_title').html(data.package[0]['title']);
            $('#ser_pack_price').html("US $ " + data.package[0]['price']);
            $('#ser_pack_description').html(data.package[0]['description']);
            $('#ser_pack_duration').html(data.package[0]['duration']);
            $('#ser_pack_active').html(data.packageListData);
            $('#packageListData_th2').html(data.packageListData_th2);
        }
    });

}



function ServiceList(ServiceID) {
    $.ajax({
        type: 'POST',
        url: `/getservicedata`,
        data: {
            'ServiceID': `${ServiceID}`
        },
        success: function (data) {
            alert(data.service['name']);
            //   $("#msg").html(data.msg);
            // alert(data.service.name);
            $('#service_list_title').html(data.service.title);
            $('#service_list_category').html(data.service.category);
            $('#service_list_description').html(data.service.description);
            $('.slide_buttons').html(" ");
            $('#slider_add').removeClass('slider');
            $('#service_banner_slider').removeClass('slide_group');
            $('#service_banner_slider').addClass('slide_group2');
            $('#slider_add').addClass('slider2');


            $('#img_replace').css('background-image',`url(${data.service_img})`);

            // $('#service_banner_slider').html(data.service_img);


            banner_slider2();

            $('#card_badge').html(data.packageData);
            $('#card_badge .col:first').addClass('active');
            $('#ser_pack_title').html(data.package[0]['title']);
            $('#ser_pack_price').html("US $ " + data.package[0]['price']);
            $('#ser_pack_description').html(data.package[0]['description']);
            $('#ser_pack_duration').html(data.package[0]['duration']);
            $('#ser_pack_active').html(data.packageListData);
        }
    });
}


function selectedPackage(ServiceID, classIndex, feature_index) {
    $.ajax({
        type: 'POST',
        url: `/getservicedata/selected`,
        data: {
            'ServiceID': `${ServiceID}`,
            'feature_index': `${feature_index}`,
        },

        success: function (data) {
            $('#card_badge').html(data.packageData);
            $('#ser_pack_title').html(data.package['title']);
            $('#ser_pack_price').html("US $ " + data.package['price']);
            $('#ser_pack_description').html(data.package['description']);
            $('#ser_pack_duration').html(data.package['duration']);
            $('#ser_pack_active').html(data.packageListData);
            $(`#card_badge .col`).removeClass('active');
            $(`#card_badge ${classIndex}`).addClass('active');
            $(`#card_badge_price .col span`).addClass('active');
            $(`#card_badge_price ${classIndex} span`).removeClass('active');


            if (`${feature_index}` == 2) {
                $('#package_offer').html('20% Off');
            } else if (feature_index == 1){
                $('#package_offer').html('10% Off')
            }else{
                $('#package_offer').html(' ')
            }

        }
    });
}


function banner_slider2() {
    $('.slider2').each(function () {
        var $this = $(this);
        var $group = $this.find('.slide_group2');
        var $slides = $this.find('.slide2');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function () {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }

        $('.next_btn').on('click', function () {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function () {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });

        $.each($slides, function (index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function () {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
}

// ==================> Service Select Event || End <==================



// ==================> Service Scroll Event|| Start <==================
var pricing_main = $('#pricing').offset().top;

$(window).on("scroll", function () {
    // if ($(window).scrollTop() > 1700) {
    // if ($(window).scrollTop() > 3500) {
    //     // alert($(window).scrollTop());
    //     $('#service_col_full').addClass('service_col_full_fixed');
    //     $('#service_col_one').addClass('service_one_fixed');
    //     $('#sct_heading').addClass('sct_heading_fixed');
    //     $('#service_col_two').addClass('service_two_fixed');
    //     $('#service_col_three').addClass('service_three_fixed');
    // } else {
    //     //remove the background property so it comes transparent again (defined in your css)
    //     $('#service_col_full').removeClass('service_col_full_fixed');
    //     $('#service_col_one').removeClass('service_one_fixed');
    //     $('#sct_heading').removeClass('sct_heading_fixed');
    //     $('#service_col_two').removeClass('service_two_fixed');
    //     $('#service_col_three').removeClass('service_three_fixed');
    // }

    var currentScroll = $(window).scrollTop();

    if (currentScroll >= pricing_main) {
    // if ($(window).scrollTop() > 3820) {

        // alert($(window).scrollTop());
        $('#pricing').addClass('service_price_sticky_one');
        $('#sub_serve').addClass('sub_serve');
        $('#sct_heading').addClass('sct_heading_fixed');
        $('.service_col_three_main').addClass('service_col_three_main_fix');
        $('.sct_content').addClass('sct_content_pt');

        // Description || Event || Start
        $(`#service_list_description`).removeClass('service_list_top');
        // $(`#service_list_description`).addClass('service_list_top_15');
        // window.location.href = `#service_list_description`;

        $('#service_col_two').addClass('service_col_two');
        // Description || Event || End

    } else {
        $('#pricing').removeClass('service_price_sticky_one');
        $('#sub_serve').removeClass('sub_serve');
        $('#sct_heading').removeClass('sct_heading_fixed');
        $('.service_col_three_main').removeClass('service_col_three_main_fix');
        $('.sct_content').removeClass('sct_content_pt');
        $('#service_col_two').removeClass('service_col_two');
        
        // $(`#service_list_description`).removeClass('service_list_top');
    }
    
    // console.log($(window).scrollTop());
    
    if ($(window).scrollTop() < 3950) {
        $('#service_list_description').removeClass('service_list_top_2');
        // $(`#service_list_description`).removeClass('service_list_top');
    }
    // if ($(window).scrollTop() < 3550) {
    //     $(`#service_list_description`).removeClass('service_list_top_15');
    // }



    if ($(window).scrollTop() > 50) {
        // alert($(window).scrollTop());
        $('#section_pagination').removeClass('d-none');
    } else {
        $('#section_pagination').addClass('d-none');
    }


});

// ==================> Service Scroll Event|| End <==================





// ==================> FAQ Active Event|| Start <==================
$(document).ready(function () {
    $('.faq_box:first').click();
    // $('#menu .grp_one:first').click();
});




// ==================> FAQ Active Event|| End <==================


// ==================> Banner Slider || Start <==================
// ==================> Banner Slider || Start <==================
// ==================> Banner Slider || Start <==================


