var activeTarget = "",
DTMScripts = {
    init: function(){
        DTMScripts.BannerCarousel();
        if($('.home-page').length > 0){
            DTMScripts.BrandCarousel();
            DTMScripts.SpecialOfferCarousel();
            DTMScripts.RangeSlider('#searchbudget_range',1000,0,1000);
        }

        if($('.inventory-page').length > 0){
            DTMScripts.PriceRange();
            DTMScripts.RangeSlider('#spend_range',1000,0,1340);
            DTMScripts.RangeSlider('#afford_range',1000,0,1340);
            DTMScripts.RangeSlider('#kilometres_range',990000,0,990000);
            DTMScripts.RangeSlider('#vehiclecondition_range',2,0,4);
        }
        if($('.finance-calculator').length > 0){
            DTMScripts.RangeSlider('#finance_range',25000,0,500000);
            DTMScripts.RangeSlider('#loanterm_range',5,0,7);
            DTMScripts.RangeSlider('#financeint_range',10,0,19.99);
            DTMScripts.RangeSlider('#yearselapsed_range',0,0,5);
        }
        if($('.inventory-detail').length > 0){
            DTMScripts.InventoryDetailCarousel();
            DTMScripts.InvDetlMainImageModalCarousel();
            DTMScripts.RangeSlider('#vehiclecondition_range',2,0,4);
        }
        if($('.brand-detail').length > 0){
            $('.custom-select').select2();
            DTMScripts.BrandDetailCarousel();
        }
        DTMScripts.ViewMoreLess();
    },
    BannerCarousel: function(){
        // $('.home-banner').owlCarousel({
        //     items:1,
        //     loop:true,
        //     margin:10,
        //     navigation:true,
        //     dots:false,
        //     autoPlay:true,
        //     navigationText : ["",""]
        // })
        if($('.swiper-container').length > 0)
        {
            var mySwiper = new Swiper(".swiper-container", {
                slidesPerView: 1,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            mySwiper.on('transitionEnd', function () {
                var index = mySwiper.realIndex + 1;
                
                var getHead = $('#img_tagline_'+index).text();
                $('#diplay_tagline').text(getHead);
            
                var getDesc = $('#img_desc_'+index).html();
                $('#display_dec').html(getDesc);
            });
        }
    },
    BrandCarousel: function(){
        if($(window).width() < 823){
            if($('.brand-carousel .item').length > 3){
                $('.brand-carousel').owlCarousel({
                    items:3,
                    margin:10,
                    navigation:true,
                    navigationText : ["",""],
                    itemsDesktop: [1200,5],
                    itemsDesktopSmall: [992,3],
                    itemsTablet: [768,3],
                    itemsMobile: [480,3],
                    dots:false,
                    autoPlay:true
                });
            }
            else{
                $('.brand-carousel').removeClass('owl-carousel');
                $('.brand-carousel').addClass('non-carousel');
            }
        }
        else{
            $('.brand-carousel').owlCarousel({
                items:5,
                margin:10,
                navigation:true,
                navigationText : ["",""],
                itemsDesktop: [1200,5],
                itemsDesktopSmall: [992,3],
                itemsTablet: [768,3],
                itemsMobile: [480,2],
                dots:false,
                autoPlay:true
            });
        }
    },
    SpecialOfferCarousel: function(){
        $('.offers-carousel').owlCarousel({
            items:4,
            margin:10,
            navigation:true,
            navigationText : ["",""],
            itemsDesktop: [1200,4],
            itemsDesktopSmall: [992,3],
            itemsTablet: [768,2],
            itemsMobile: [480,1],
            dots:false,
            autoPlay:true,
            lazyLoad:true
        })
    },
    PriceRange: function(){
        $("#price_range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [0, 500],
            slide: function(event, ui) {
                $("#amount").text("$" + ui.values[0] + " - $" + ui.values[ 1 ]);
            }
        });
        $("#amount").text("$" + $("#price_range").slider("values", 0) +
            " - $" + $("#price_range").slider("values", 1));
    },
    RangeSlider: function(element,value,min,max){
        $(element).slider({
            range: "min",
            value: value,
            min: min,
            max: max,
            create: function( event, ui ) {
                if(element == "#yearselapsed_range"){
                    setSliderTicks(event.target);
                }
                else if(element == "#vehiclecondition_range"){
                    setSliderTicks1(event.target);
                }
            },
            slide: function(event, ui) {
                $(element).parent().find("#budget_amount").text( ui.value)
            }
        });
        $(element).parent().find("#budget_amount").text($(element).slider("value"));
    },
    InventoryDetailCarousel: function(){
        if($("#carousel").length > 0 || $("#thumbnails").length > 0)
        {
            var primary = $("#carousel");
            var secondary = $("#thumbnails");
              primary.owlCarousel({
                items:1,
                itemsDesktop: [1200,1],
                itemsDesktopSmall: [992,1],
                itemsTablet: [768,1],
                itemsMobile: [480,1],
                navSpeed               : 1000,
                pagination             : false,
                afterAction            : syncPosition,
                navigation             : true,
                navigationText         : ["",""]
            });

            secondary.owlCarousel({
                items                 : 4,
                itemsDesktop          : [1200,4],
                itemsDesktopSmall     : [992,4],
                itemsTablet           : [768,3],
                itemsMobile           : [480,3],
                pagination            : false,
                responsiveRefreshRate : 100,
                navigation            : true,
                navigationText        : ["",""],
                afterInit             : function(el) {
                  el.find(".owl-item").eq(0).addClass("synced");
                }
            });

            function syncPosition(el) {
                var current = this.currentItem;
                secondary.find(".owl-item").removeClass("synced").eq(current).addClass("synced");
                if (secondary.data("owlCarousel") !== undefined) {
                    center(current);
                }
                $('.current-item').html(this.owl.currentItem + 1);
                $('.max-items').html(this.owl.owlItems.length);
            }
            secondary.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).data("owlItem");
                primary.trigger("owl.goTo",number);
            });
            function center(number) {
                var sync2visible = secondary.data("owlCarousel").owl.visibleItems;
                var num = number;
                var found = false;
                for (var i in sync2visible) {
                    if (num === sync2visible[i]) {
                        var found = true;
                    }
                }
                if (found===false) {
                    if (num>sync2visible[sync2visible.length-1]) {
                        secondary.trigger("owl.goTo", num - sync2visible.length+2);
                    } else{
                        if (num - 1 === -1) {
                          num = 0;
                        }
                        secondary.trigger("owl.goTo", num);
                    }
                } 
                else if (num === sync2visible[sync2visible.length-1]) {
                    secondary.trigger("owl.goTo", sync2visible[1]);
                } 
                else if (num === sync2visible[0]) {
                    secondary.trigger("owl.goTo", num-1);
                }
            }
        }
    },
    InvDetlMainImageModalCarousel: function(){
        $('#mainImageModalCarousel').owlCarousel({
            items:1,
            margin:10,
            navigation:true,
            navigationText : ["",""],
            itemsDesktop: [1200,1],
            itemsDesktopSmall: [992,1],
            itemsTablet: [768,1],
            itemsMobile: [480,1],
            dots:false,
            autoPlay:true
        })
    },
    ViewMoreLess: function(){
        var minimized_elements = $('p.content');
    
        minimized_elements.each(function(){    
            var t = $(this).text();        
            if(t.length < 100) return;
            $(this).html(
                t.slice(0,100)+'<span>... </span><div class="more view-btn"><a href="javascript:void(0)" class="btn btn-red-small">View More</a></div>'+
                '<span style="display:none;">'+ t.slice(100,t.length)+' <div class="less view-btn"><a href="javascript:void(0)" class="btn btn-red-small">View Less</a></div></span>'
            );
        }); 
        
        $('.more', minimized_elements).click(function(event){
            event.preventDefault();
            $(this).hide().prev().hide();
            $(this).next().show();        
        });
        
        $('.less', minimized_elements).click(function(event){
            event.preventDefault();
            $(this).parent().hide().prev().show().prev().show();    
        });
    },
    BrandDetailCarousel: function(){
        $('#carousel-inner-images').owlCarousel({
            items:1,
            itemsDesktop: [1200,1],
            itemsDesktopSmall: [992,1],
            itemsTablet: [768,1],
            itemsMobile: [480,1],
            loop:true,
            margin:10,
            navigation:false,
            dots:true,
            autoPlay:true,
            navigationText : ["",""]
        })
    },
}
function setSliderTicks(el) {
    var $slider =  $(el);
    var max =  $slider.slider("option", "max");
    var min =  $slider.slider("option", "min");
    var spacing =  100 / (max - min);

    $slider.find('.ui-slider-tick-mark').remove();
    $('<div class="tick-wrapper"></div>').appendTo($slider);
    for (var i = 0; i <= max-min ; i++) {
        $('<span class="ui-slider-tick-mark">'+'<span>'+ i +'</span></span>').css('left', (spacing * i) +  '%').appendTo($slider).find('.tick-wrapper');
     }
}
function setSliderTicks1(el) {
    var $slider =  $(el);
    var max =  $slider.slider("option", "max");
    var min =  $slider.slider("option", "min");
    var spacing =  100 / (max - min);

    $slider.find('.ui-slider-tick-mark').remove();
    $('<div class="tick-wrapper"></div>').appendTo($slider);
    for (var i = 0; i <= max-min ; i++) {
        var vehicleCondition = (i == 0 ? "Poor" : i==2 ? "Average" : i==4 ? "Excellent" : "");
        $('<span class="ui-slider-tick-mark">'+'<span>'+ vehicleCondition +'</span></span>').css('left', (spacing * i) +  '%').appendTo($slider).find('.tick-wrapper');
     }
}
function accordion(id) {
    if ($(window).width() <= 943) {
        var x = document.getElementById(id);
        $(x).siblings().toggleClass('active');
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
}
$(document).ready(function() {
    DTMScripts.init();
    $('[data-toggle="tooltip"]').tooltip();
    if($('.aos-item').length > 0){
        AOS.init({
          easing: 'ease-in-out-sine'
        });
    }
    $('.custom-select').select2();

    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });

    if($(window).width() < 767){
        $('#make_offer').insertAfter("[data-id=make_offer]");
        $('#sendto_friend').insertAfter("[data-id=sendto_friend]");
        $('#make_enquiry').insertAfter("[data-id=make_enquiry]");
        $('#finance_calculator').insertAfter("[data-id=finance_calculator]");
        $('#test_drive').insertAfter("[data-id=test_drive]");
        $('#tradein_enquiry').insertAfter("[data-id=tradein_enquiry]");
        $('#request_video').insertAfter("[data-id=request_video]");
    }
    
    if($(window).width() < 824){
        $('.header').addClass("header-alt");
    }
    if(localStorage.getItem('imageViewOption') == "list_view"){
        $('.view-option').removeClass('active');
        $('#list_view').addClass('active');
        $('.inventory-page').addClass('list-view');
    }
    if(localStorage.getItem('imageViewOption') == "thumb_view"){
        $('.view-option').removeClass('active');
        $('#thumb_view').addClass('active');
        $('.inventory-page').addClass('thumb-view');
    }
    if(localStorage.getItem('imageViewOption') == "gallery_view"){
        $('.view-option').removeClass('active');
        $('#gallery_view').addClass('active');
        $('.inventory-page').addClass('gallery-view');
    }
    $("#mobile-nav-btn").click(function(e) {
        $(".header").toggleClass('header-responsive');
        $(".mobile-nav .drop-menu").toggleClass('show-on-mobile');
        $(this).toggleClass('menu-mobile-close');
        e.preventDefault();
    });
    $(".mobile-blog-sidebar").click(function(e) {
        $('.overlay').toggleClass('show');
        $('.blog-sidebar').toggleClass('show');
    });
    $(".blog-sidebar .close").click(function(e) {
        $('.overlay').removeClass('show');
        $('.blog-sidebar').removeClass('show');
    });
    $('.spec-accordion').each(function () {
        var $accordian = $(this);
        $accordian.find('.spec-head').on('click', function () {
          if($(this).hasClass('open')) {
            $(this).removeClass('open').addClass('close');
            $(this).next().slideUp();
          } else {
            if (!$(this).next().is(':visible')) {
              $(this).removeClass('close').addClass('open');
              $(this).next().slideDown();
            }
          }
        });
    });
    $("input,.sbSelector").focus(function(){
        $(this).parent().find('.field-label').css("display","none");
    });
    $("input, .sbHolder").blur(function(){
        if($(this).val() != ""){
            $(this).parent().find('.field-label').css("display","none");
        }
        else{
            $(this).parent().find('.field-label').css("display","block");
        }
    });
    var urlHashVal = window.location.hash;
    if(urlHashVal != ""){
        $(urlHashVal).trigger('click');
        $('html, body').animate({
            scrollTop: $(urlHashVal).offset().top - 110
        }, 2000);
    }

    // if(window.location.pathname.indexOf("benz") > 0){
    //     $('#brand-nav-tabs li').css('display','none');
    //     $('#brand-nav-tabs').find('.benz').css('display','table-cell');
    //     $('#brand-nav-tabs').find('.benz').addClass('active')
    // }
    // else if(window.location.pathname.indexOf("freightliner") > 0){
    //     $('#brand-nav-tabs li').css('display','none');
    //     $('#brand-nav-tabs').find('.freightliner').css('display','table-cell');
    //     $('#brand-nav-tabs').find('.freightliner').addClass('active')
    // }
    // else if(window.location.pathname.indexOf("fuso") > 0){
    //     $('#brand-nav-tabs li').css('display','none');
    //     $('#brand-nav-tabs').find('.fuso').css('display','table-cell');
    //     $('#brand-nav-tabs').find('.fuso').addClass('active')
    // }
});
$(window).resize(function(){
    if($(window).width() < 767){
        $('#make_offer').insertAfter("[data-id=make_offer]");
        $('#sendto_friend').insertAfter("[data-id=sendto_friend]");
        $('#make_enquiry').insertAfter("[data-id=make_enquiry]");
        $('#finance_calculator').insertAfter("[data-id=finance_calculator]");
        $('#test_drive').insertAfter("[data-id=test_drive]");
        $('#tradein_enquiry').insertAfter("[data-id=tradein_enquiry]");
        $('#request_video').insertAfter("[data-id=request_video]");
    }
    else{
        $('#make_offer').insertAfter(".vehicle-summary");
        $('#sendto_friend').insertAfter(".vehicle-summary");
        $('#make_enquiry').insertAfter(".vehicle-summary");
        $('#finance_calculator').insertAfter(".vehicle-summary");
        $('#test_drive').insertAfter(".vehicle-summary");
        $('#tradein_enquiry').insertAfter(".vehicle-summary");
        $('#request_video').insertAfter(".vehicle-summary");
    }
});
$(window).on('scroll', function() {
    // if($('.filter-box').length > 0){
    //     if ($(window).scrollTop() >= $('.filters').offset().top + $('.filters').outerHeight() - window.innerHeight) {
    //         $('.refine-search-btn').removeClass('fixed');
    //     }
    //     else{
    //         $('.refine-search-btn').width($('.filter-box').width() - 42);
    //         $('.refine-search-btn').addClass('fixed');
    //     }

    //     // if($(window).scrollTop() > $('.filters').offset().top)
    //     // {
    //     //     $('.refine-search-btn').addClass('fixed');
    //     // }
    //     // else{
    //     //     $('.refine-search-btn').removeClass('fixed');
    //     // }
    // }
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn();
    } else {
        $('.back-to-top').fadeOut();
    }
});
$('.view-option').click(function(){
    $('.view-option').removeClass('active');
    if($(this).attr('id') == "list_view"){
        $(this).addClass('active');
        $('.inventory-page').removeClass('thumb-view gallery-view').addClass('list-view');
        localStorage.setItem('imageViewOption','list_view');
    }
    if($(this).attr('id') == "thumb_view"){
        $(this).addClass('active');
        $('.inventory-page').removeClass('list-view gallery-view').addClass('thumb-view');
        localStorage.setItem('imageViewOption','thumb_view');
    }
    if($(this).attr('id') == "gallery_view"){
        $(this).addClass('active');
        $('.inventory-page').removeClass('list-view thumb-view').addClass('gallery-view');
        localStorage.setItem('imageViewOption','gallery_view');
    }
});
$('#goToOperatingHours').click(function(){
    $('html, body').animate({
        scrollTop: $('#OperatingHours').offset().top - 110
    }, 2000);
});
$('#change_btn').click(function(){
    $(this).parents('.actual-budget').css('display','none');
    $(this).parents('.actual-budget').next().css('display','block');
});
$('#cancel_btn').click(function(){
    $(this).parents('.modify-budget').css('display','none');
    $(this).parents('.modify-budget').prev().css('display','flex');
});
$('#back_top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
$(".panel-head").click(function(e) {
    $(this).children('.fa').toggleClass('fa-angle-up fa-angle-down');
    $(this).next().slideToggle();
});
if($(window).width() < 767){
    $(".form-link").click(function() {
        if ($(this).hasClass("selected")) {
            $(this).removeClass("selected");
            $(this).siblings(".panel-slider").slideUp(200);
        } else {
            $(".form-link").removeClass("selected");
            $(this).addClass("selected");
            $(".panel-slider").slideUp(200);
            $(this).siblings(".panel-slider").slideDown(200);
        }
        if ($(this).attr('id') == "print-details-page") {
            window.print();
            return false;
        }
    });
}
if($(window).width() > 767){
    $(".form-link").click(function() {
        var isactive = false;
        if(activeTarget == $(this).attr('data-id'))
        {
            isactive = true;
        }
        activeTarget = $(this).attr('data-id');
        if($(".form-toggle .close").length > 0)
        {
            $('body').find('#'+$(this).attr('data-id')).slideDown();
        }
        else if($('.sidebar-toggle-forms').length > 0){
            $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').find('.product-summary').css('display','block');
            if ($(this).attr('id') == "print-details-page") {
                $('.form-toggle').height(0);
                $('.form-toggle').removeClass('open');
                $('.sidebar-toggle').removeClass('open')
                window.print();
                return false;
            }
            if(activeTarget == "finance_calculator")
            {
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').find('.product-summary').css('display','none');
            }
            if($('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').hasClass('open') && isactive)
            {
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').height(0);
                $('body').find('#'+$(this).attr('data-id')).removeClass('selected');
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').removeClass('open');
                $(this).parents('.sidebar-toggle').removeClass('open');
            }else{
                $('.panel-slider').removeClass('selected');
                $('.form-link').removeClass('selected');
                $(this).addClass('selected');
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').find('.form-title').text($(this).find('.text').text());
                $('body').find('#'+$(this).attr('data-id')).addClass('selected');
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').addClass('open');
                $(this).parents('.sidebar-toggle').addClass('open'); // sidebar
                var totalheight = $('.vehicle-summary').height() + $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').find('.panel-slider.selected').height();
                $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle').height(totalheight);
            }
        }
        else{
            //$('.form-toggle').css('display','none');
            $('body').find('#'+$(this).attr('data-id')).siblings().slideUp();
            $('body').find('#'+$(this).attr('data-id')).slideToggle();
        }
        var error = "", errorValue;
        if($('.sidebar-toggle-forms').length > 0){
            error = $('body').find('#'+$(this).attr('data-id')).parents('.form-toggle');
        }else{
            //error = $('body').find('#'+$(this).attr('data-id'));
        }
        if(error.length > 0) {
            errorValue = error.offset().top;

            if(errorValue != "0" && errorValue != ""){
                $("html, body").animate({
                    scrollTop: errorValue
                }, 500)
            }
        }
    });
}
$(".form-toggle .close").click(function() {
    $(this).parent().slideUp();
});
$(".form-toggle .form-close").click(function() {
    $(this).parents('.form-toggle').height(0);
    $('body').find('#'+$(this).parents('.vehicle-summary').next().attr('id')).removeClass('selected');
    $('.sidebar-toggle').removeClass('open');
});


