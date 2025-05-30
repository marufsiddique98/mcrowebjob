"use strict";
jQuery(document).ready(function () {

    let tk_lang = document.querySelector("#tk-lang");
    if(tk_lang !== null) {
        $('#tk-lang').select2({minimumResultsForSearch:-1});

        $('#tk-lang').on('change', function(event){
            event.preventDefault();
            $('input[name="tk-locale"]').val($(this).select2('val'));
            $(this).closest('form').submit();
        })
    }

    let tb_tippy = document.querySelector(".tippy");
    if (tb_tippy !== null) {
        tippy(".tippy", {
            animation: "scale",
        });
    }
    
	//Sidebar Toggle
    $('.tk-toggler-btn').on('click',function (e) {
        e.preventDefault();
        if($(window).width() < 992){
             $(this).parents('.tk-themesidebar').toggleClass('wr-expanded');
         }else{
             $(this).parents('.tk-themesidebar').toggleClass('tk-menufold');
         }
     });
 
     $('.tk-themesidebar .menu-item-has-children > a').on('click',function (e) {
         e.preventDefault();
         if(!$('.tk-themesidebar').hasClass('tk-menufold')){
             $(this).parents('.menu-item-has-children').toggleClass('wr-active');
             $(this).parents('.menu-item-has-children').find('.sub-menu').slideToggle();
         }
     });
 
     // $('.wr-dashboard-sidebar-setting-menu').mCustomScrollbar();
 
     $(window).on('resize', function() {
         if($(window).width() < 992){
             $('.tk-themesidebar.tk-menufold').removeClass('tk-menufold');
         }
     }).resize();
    /* MOBILE MENU*/
    function collapseMenu() {
        jQuery('.tb-navbar ul li.menu-item-has-children').prepend('<span class="tk-dropdowarrow"><i class="icon-chevron-right"></i></span>');
        jQuery('.tb-navbar ul li.menu-item-has-children span').on('click', function () {
            jQuery(this).parent('li').toggleClass('tk-open');
            jQuery(this).next().next().slideToggle(300);
        });
    }

    collapseMenu();
    jQuery('.tk-headervfour .tk-navbar-right .navbar-toggler').on('click', function () {
        jQuery(".tk-bottomnavbar .navbar-collapse").removeClass("show")
    });

    jQuery('.tk-bottomnavbar .navbar-toggler').on('click', function () {
        jQuery(".tk-navbar-right .navbar-collapse").removeClass("show")
        jQuery('.tk-navbar-right .navbar-toggler').attr('aria-expanded', false);
    });

    // NOTIFICATION
    jQuery('.tk-notidropdowns > a').on('click', function (e) {
        e.stopPropagation();
        jQuery(this).next().slideToggle()
    });

    jQuery('.tk-notidropdowns .tk-noti_wrap').on('click', function (e) {
        e.stopPropagation();
    });

    jQuery(window).on('click', function (e) {
        jQuery('.tk-notidropdowns > a').next().slideUp()
    });

    jQuery(".tk-search-dropdown").on("click", function (e) {
        e.preventDefault();
        jQuery(".tk-search-menu .sub-menu").slideToggle();
        e.stopPropagation();
    });

    jQuery(window).on("click", function (e) {
        if (!jQuery(e.target).closest('.tk-search-menu').length) {
            jQuery(".tk-search-menu .sub-menu").slideUp();
        }
    });

    // input asteric
    jQuery('.tk-placeholder').on('click', function () {
        jQuery(this).siblings('.form-control').focus();
    });

    jQuery('.form-control').on('input', function () {
        jQuery(this).siblings('.tk-placeholder').hide();
        if (jQuery(this).val().length == 0)
            jQuery(this).siblings('.tk-placeholder').show();
    });

    jQuery('.form-control').on('blur', function () {
        if (jQuery(this).val().length == 0)
            jQuery(this).siblings('.tk-placeholder').show();
    });

    jQuery('.form-control').blur();
    var tk_formcontrol = document.querySelector('.form-control')
    if (tk_formcontrol !== null) {
        if (jQuery('.form-control').val().length < 0) {
            jQuery('.form-control').siblings('.tk-placeholder').hide();
        }
        if (jQuery('.form-control').val().length == 0) {
            jQuery('.form-control').siblings('.tk-placeholder').show();
        }
    }

    // header icon button click
    jQuery('.tk-formicon').on('click', function () {
        jQuery(this).closest('.tk-navbar').addClass('tk-searchopen')
    });

    jQuery('.tk-formcloseicon').on('click', function () {
        jQuery(this).closest('.tk-navbar').removeClass('tk-searchopen')
    })
    // active class toggle on hover

    // dropdown
    jQuery('.tk-dropdown_list a').on('click', function () {
        jQuery(this).closest('.tk-dropdown_list').addClass('d-none')
        jQuery(this).closest('.tk-dropdown_list').prev().prev('.tk-input').addClass('d-none')
        jQuery(this).closest('.tk-dropdown_list').prev('.tk-backdropdown').removeClass('d-none')
        jQuery(this).closest('.tk-dropdown_list').next().removeClass('d-none')
    });

    jQuery('.tk-backdropdown a').on('click', function (e) {
        jQuery(this).closest('.tk-backdropdown').addClass('d-none')
        jQuery(this).closest('.tk-backdropdown').prev().removeClass('d-none')
        jQuery(this).closest('.tk-backdropdown').next().removeClass('d-none')
        jQuery(this).closest('.tk-backdropdown').next().next().addClass('d-none')
        e.stopPropagation()
    });
    $('.tk-asidenavbar > li > a').click(function(e){
        e.stopPropagation();
        var $this = $(this);
        var $dropdownContent = $this.next('.tk-asidedropdown');
        $dropdownContent.slideToggle('slow').parent().toggleClass('active');
    })
 
    // toogle active class on form banner
    jQuery(window).on('click', function (e) {
        if (!jQuery(e.target).is('.tk-dropdownholder')) {
            jQuery('.tk-dropdownholder .collapse').collapse('hide');
        }
    });

    jQuery('.tk-dropdownholder .tk-input, .tk-dropdown_list').on('click', function (e) {
        e.stopPropagation()
    })

    // liked class togle
    $(function () {
        jQuery('.tk-like').on('click', function () {
            $(this).toggleClass('tk-liked');
        });
    });

    //Aos animation
    var lo_aos = document.querySelector('[data-aos]')
    if (lo_aos !== null) {
        AOS.init({
            offset: 200,
            duration: 1000,
        });
    };

    // range mater collapse
    $(".tk-rangevalue").on('click', function () {
        $('#rangecollapse').collapse('show');
    });

    // slider nav active class
    jQuery('.wk-servicetab_list a').on('click', function () {
        jQuery('.wk-servicetab_list li a').removeClass('wk-active')
        jQuery(this).addClass('wk-active')
    })


});


// inialize select2 scrollbar
function iniliazeSelect2Scrollbar() {

    jQuery('.tk-select select, .tb-select select').on('select2:open', function (e) {
        jQuery('.select2-results__options').mCustomScrollbar('destroy');
        setTimeout(function () {
            jQuery('.select2-results__options').mCustomScrollbar();
        }, 0);
    });

    $(document).on('keydown', '.select2-search__field', function (event) {
        jQuery('.select2-results__options').mCustomScrollbar('destroy');
        setTimeout(function () {
            jQuery('.select2-results__options').mCustomScrollbar();
        }, 0);
    });

    jQuery('.tk-select2').each(function (index, item) {
        let _this = jQuery(this);
        let params = {
            placeholder: _this.data('placeholder'),
            allowClear: true,
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth : true,
        }
        let autoclose = _this.data('autoclose');

        if (autoclose == false) {
            params['closeOnSelect'] = false;
        }

        if (_this.data('hide_search_opt')) {
            params['minimumResultsForSearch'] = -1;
        }
        _this.select2(params);
    });
    setSeacrhPlaceholder();
}

function setSeacrhPlaceholder() {
    jQuery('[data-placeholderinput]').each(function (item) {
        var data_placeholder = jQuery('[data-placeholderinput]')[item]
        var tk_id = jQuery(data_placeholder).attr('id')
        var tk_placeholder = jQuery(data_placeholder).attr('data-placeholderinput')
        jQuery('#' + tk_id).on('select2:open', function (e) {
            jQuery('input.select2-search__field').prop('placeholder', tk_placeholder);
        });
    });
}

setSeacrhPlaceholder();

// Confirm alert message
function showAlert(data) {
    let { title, message, type, autoclose, redirectUrl } = data;

    let alertIcon = 'ti-face-sad';
    let alertType = 'dark';

    if (type === 'success') {
        alertIcon = 'icon-check';
        alertType = 'green';
    } else if (type === 'error') {
        alertIcon = 'icon-x';
        alertType = 'red';
    }

    $.confirm({
        icon: alertIcon,
        closeIcon: function () {
            if (redirectUrl) {
                return 'close';
            } else {
                return true;
            }
        },
        theme: 'modern',
        animation: 'scale',
        type: alertType, //red, green, dark, orange
        title,
        content: message,
        autoClose: 'close|' + autoclose,
        buttons: {
            close: {
                btnClass: 'tb-sticky-alert',
                action: function () {
                    if (redirectUrl) {
                        location.href = redirectUrl;
                    }
                },
            }
        }
    });
}

function inializePriceRange(params) {
    // range, min_price, max_price, id, id2
    let { range, min_price, max_price, id1, id2 } = params;
    // range slider
    let stepsSlider = document.getElementById('tk-rangeslider');
    if (stepsSlider !== null) {

        let input0 = document.getElementById(id1);
        let input1 = document.getElementById(id2);
        let inputs = [input0, input1];
        let min = range[0];
        let max = range[1];



        let configSetting = {
            start: [Number(min_price), Number(max_price)],
            connect: true,
            range: { min, max },
            format: {
                to: (v) => parseFloat(v).toFixed(0),
                from: (v) => parseFloat(v).toFixed(0),
            },
        };

        if (window.isRTL == '1') {
            configSetting['direction'] = 'rtl';
        }

        noUiSlider.create(stepsSlider, configSetting);

        stepsSlider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
            $('#' + inputs[handle].id).trigger('change');
        });

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                stepsSlider.noUiSlider.setHandle(handle, this.value);
            });

            input.addEventListener('keydown', function (e) {
                var values = stepsSlider.noUiSlider.get();
                var value = Number(values[handle]);
                var steps = stepsSlider.noUiSlider.steps();
                var step = steps[handle];
                var position;
                switch (e.which) {
                    case 13:
                        stepsSlider.noUiSlider.setHandle(handle, this.value);
                        break;
                    case 38:
                        position = step[1];
                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }
                        if (position !== null) {
                            stepsSlider.noUiSlider.setHandle(handle, value + position);
                        }
                        break;
                    case 40:
                        position = step[0];
                        if (position === false) {
                            position = 1;
                        }
                        if (position !== null) {
                            stepsSlider.noUiSlider.setHandle(handle, value - position);
                        }
                        break;
                }
            });
        });
    }

    $(".tk-rangevalue").on('click', function () {
        $('#rangecollapse').collapse('show');
    });
}

// inialize select2 scrollbar
function iniliazeActivityScrollbar() {
    setTimeout(function () {
        jQuery('.tk-proactivity_list').mCustomScrollbar();
    }, 0);
}

$(document).on("click", function (e) {
    let triggerSec = $(".tb-themeselect .tb-select");
    if (!triggerSec.is(e.target) && triggerSec.has(e.target).length === 0) {
        $(".tb-categorytree-dropdown").hide();
    }
});

window.addEventListener('showAlertMessage', event => {
    showAlert({
        message: event.detail.message,
        type: event.detail.type,
        title: event.detail.title ? event.detail.title : '',
        autoclose: event.detail.autoClose ? event.detail.autoClose : 2000,
        redirectUrl: event.detail.redirectUrl ? event.detail.redirectUrl : ''
    });
});

function confirmAlert(params) {
    let { title, listenerName, content, action } = params;

    window.addEventListener(listenerName, event => {
        $.confirm({
            title: title,
            content: content,
            type: 'red',
            icon: 'icon-alert-circle',
            closeIcon: true,
            typeAnimated: false,
            buttons: {
                yes: {
                    btnClass: 'btn-red',
                    action: function () {
                        Livewire.emit(action);
                    },
                },
                no: function () {
                },
            }
        });
    });
}

function ConfirmationBox(params) {
    let { title, content, action, btn_class, type_color } = params;
    $.confirm({
        title: title,
        content: content,
        type: type_color,
        icon: 'icon-alert-circle',
        closeIcon: true,
        typeAnimated: false,
        buttons: {
            yes: {
                btnClass: 'btn-' + btn_class,
                action: function () {
                    Livewire.emit(action, params);
                },
            },
            no: function () {
            },
        }
    });
}

setTimeout(() => {
    $(window).scroll(function () {
        $.each($('img'), function () {
            if ($(this).attr('data-src') && $(this).offset().top < ($(window).scrollTop() + $(window).height() + 100)) {
                let src = $(this).data('src');
                $(this).attr('src', src);
                $(this).removeAttr('data-src');
            }
        })
    })
}, 1000);

function initSwiperSlider(params) {
    let { selector, preview_count } = params;

    let slider_selector = document.querySelector('.' + selector)
    if (slider_selector !== null) {
        slider_selector = new Swiper("." + selector, {
            // slidesPerView: 3,
            spaceBetween: 0,
            navigation: {
                nextEl: '.sliderarrow__next',
                prevEl: '.sliderarrow__prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                767: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                1199: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                1366: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
            }
        });
    }
}

function initPortfolioSlider(params) {

    let { selector, preview_count } = params;

    let tk_portfolioslider = document.querySelector('.' + selector)
    if (tk_portfolioslider !== null) {
        tk_portfolioslider = new Swiper("." + selector, {
            // slidesPerView: 2,
            spaceBetween: 0,
            freeMode: true,
            navigation: {
                nextEl: '.sliderarrow__next',
                prevEl: '.sliderarrow__prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                767: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                1199: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                1366: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
            }
        });
    }
}

function bannerSlider() {
    let direction = '';
    $('.sc-banner-01-wrapper').each(function (index) {

        const swiperId = 'tk-banner-slider-' + index;
        $(this).find('.swiper-pagination').addClass(swiperId);

        const hasVerticalClass = $(this).hasClass('tk-hero-banner-two');
        direction = hasVerticalClass ? 'vertical' : 'horizontal';
        const bannerSlider = new Swiper($(this).find('#tk-banner-slider').get(0), {
            loop: true,
            effect: "fade",
            speed: 1000,
            slidesPerView: 1,
            direction: direction,
            autoplay: {
                delay: 1000,
            },
            pagination: {
                el: `.${swiperId}`,
            },
        });
    });

}

function banner2Slider() {

    if (swiper) {
        swiper.destroy(true, true);
    }

    jQuery('body').hasClass('tk-rtl')

    var swiper = new Swiper(".tk-hero-banner-two-slider", {
        direction: jQuery('body').hasClass('tk-rtl') ? "rtl" : "horizontal",
        grabCursor: true,
        effect: 'fade',
        speed: 2000,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            
            767: {
                direction: "vertical",
                loop: true,
                speed: 1000,
                slidesPerView: 1,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
            },
            
        }
    });

}


function banner3Slider() {
    var swiper3 = new Swiper(".tk-hero-banner-three-slider", {
        grabCursor: true,
        effect: "slide",
        speed: 2000,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
}

function banner6Slider() {
    const bannerSix = new Swiper(".tk-bannersixsliger", {
        slidesPerView: 1,
        autoHeight: true,
        centeredSlides: true,
        spaceBetween: 0,
        effect: "creative",
        speed: 1000,
        loop: true,
        creativeEffect: {
            prev: {
                shadow: true,
                translate: [0, 0, -400],
            },
            next: {
                translate: ['100%', 0, 0],
            },
        },
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}
function marketplaceSlider(){
    const marketPlaceSlider = document.querySelector(".tk-marketplace-slider")
    if (marketPlaceSlider) {
        var swiper = new Swiper(".tk-marketplace-slider", {
            slidesPerView: "auto",
            spaceBetween: 20,
            draggable: true,
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: false,
            },
        });
    }
}

function convertImageToSVG() {
    jQuery("img.tk-img2svg").each(function () { var t = jQuery(this), r = t.attr("id"), a = t.attr("class"), e = t.attr("src"); jQuery.get(e, function (e) { var i = jQuery(e).find("svg"); void 0 !== r && (i = i.attr("id", r)), void 0 !== a && (i = i.attr("class", a + " replaced-svg")), i = i.removeAttr("xmlns:a"), t.replaceWith(i) }, "xml") });
}

function toggleMenu() {
    jQuery(".tk-navbarnav .page-item-has-children > a").on('click',function(e){
        jQuery(this).parent().children(".sub-menu").slideToggle('slow')
        jQuery(this).parent().children(".sub-menu").toggleClass('active')
    })
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    if(jQuery('body').hasClass('tk-rtl')) {
        jQuery('#chat-app').addClass('lg-rtl');
    }
});