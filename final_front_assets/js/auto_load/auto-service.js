
// function ServiceNameClick(ID, ClassName, Category_name ) {
//     $.ajax({
//         type: 'POST',
//         url: `/servicedetails`,
//         data: {
//             'id': `${ID}`
//         },
//         success: function (data) {

//             $('#package_offer').html(' ')
//             $(`#service_list_description`).html(' ');

//             $('#service_list_title').html(`<span style="font-size:30px;">${data.service.title} </span>`); // <span style="font-size:14px;"></span>
//             // $('#service_list_category').html(data.service_category);
//             $('#overview').html(data.service.overview);
//             $('#service_list_description').html(data.service.description);
//             $('#why_choose_dimarz').html(data.service.why_choose_dimarz);
//             $('#service_faq').html(data.service.faq);
//             $('#img_replace img').attr('src',data.service_img);
//             console.log(data.service_img);
            
//             $('html,body').animate({scrollTop: $("#overview").offset().top - 360},'slow', 'swing');

//             banner_slider2();
//             $('#card_badge').html(data.packageData);
//             $('#card_badge .col:first').addClass('active');
//             $('#ser_pack_title').html(data.package[0]['title']);
//             $('#ser_pack_price').html("US $ " + data.package[0]['price']);
//             $('#ser_pack_description').html(data.package[0]['description']);
//             $('#ser_pack_duration').html(data.package[0]['duration']);
//             $('#ser_pack_active').html(data.packageListData);
//             $('#packageListData_th2').html(data.packageListData_th2);
//         }
//     });

// }