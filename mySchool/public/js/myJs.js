$(document).ready(function () {
    $(".more").each(function() {
        $( this ).hide();
    });

    $(".less").each(function() {
        $( this ).show();
    });
    $(".moreBtn").on("click", function (e) {
        var itemSelect = $(this).index(e.target);
        if($(".more").eq(itemSelect).is(':visible'))
        {
            $(".more").eq(itemSelect).hide();
            $(".less").eq(itemSelect).show();

            $(this).next('.moreBtn').slideToggle(200);

        }else{
            $(".less").eq(itemSelect).hide();
            $(".more").eq(itemSelect).show();
            $(this).next('.moreBtn').slideToggle(-200);
        };
    });
    $('.menu li.active').addClass('open').children('ul').show();

    $(".menu li.has-sub> a").on('click', function () {
        $(this).removeAttr('href');
        var e = $(this).parent('li');
        if (e.hasClass('open')) {
            e.removeClass('open');
            e.find('li').removeClass('open');
            e.find('ul').slideUp(400);

        } else {
            e.addClass('open');
            e.children('ul').slideDown(400);
            e.siblings('li').children('ul').slideUp(400);
            e.siblings('li').removeClass('open');
            e.siblings('li').find('li').removeClass('oepn');
            e.siblings('li').find('ul').slideUp(200);
        }
    });
    newsHide();
    $("#newsListButton1").show();
    $("#resentNews").css("btn-success");
    $("#weekNews").click(function () {
        newsHide();
        $("#newsListButton2").show();
        $("#weekNews").css("btn-success");
    });
    $("#resentNews").click(function () {
        newsHide();
        $("#newsListButton1").show();
        $("#resentNews").css("btn-success");
    });
    $("#moonNews").click(function () {
        newsHide();
        $("#newsListButton3").show();
        $("#moonNews").css("btn-success");
    });

    function newsHide() {
        $("#newsListButton1").hide();
        $("#newsListButton2").hide();
        $("#newsListButton3").hide();
        $("#resentNews").css("btn-primary");
        $("#weekNews").css("btn-primary");
        $("#weekNews").css("btn-primary");
    }

    var i = 0;
    var totalPicSlide = $(".sliderItem").length;
    var timer = setInterval(sliderShow, 4000);

    function sliderShow() {
        i++;
        var nextPic = i % totalPicSlide;
        $("#sliderAllBtn ul li").removeClass("active");
        $("#sliderAllBtn ul li").eq(nextPic).addClass("active");
        $("#slider").find(".sliderItem").hide();
        $("#slider").find(".sliderItem").eq(nextPic).fadeIn(500);
        nextPic += 1;
    }

    $("#nextSlider").click(function () {
        clearInterval(timer);
        i -= totalPicSlide - 2;
        sliderShow();
    });
    $("#preSlider").click(function () {
        clearInterval(timer);
        i += totalPicSlide;
        sliderShow();
    });
    $("#sliderAllBtn ul li").click(function () {
        clearInterval(timer);
        i = $(this).index() + totalPicSlide - 1;
        sliderShow();
    }); // اسلایدر دوم

    var totalPicVSlider = $(".vSliderItem").length;
    var vNextPic = 0;

    if (vNextPic == 0) {
        $("#nextVSlider").css("display", "none");
    }

    $("#nextVSlider").click(function () {
        if (vNextPic == 0) {
            $("#nextVSlider").css("display", "none");
        }

        $("#priveSlider").css("display", "block");
        $("#vSlider").find(".vSliderItem").eq(vNextPic).animate({
            width: 'toggle'
        }, 150);
        vNextPic -= 1;
    });
    $("#preVSlider").click(function () {
        if (vNextPic == totalPicVSlider - 6) {
            $("#preVSlider").css("display", "none");
        }

        $("#nextVSlider").css("display", "block");
        $("#vSlider").find(".vSliderItem").eq(vNextPic).animate({
            width: 'toggle'
        }, 150);
        vNextPic += 1;
    }); //پایان اسلایدر دوم
    // اسلایدرسوم

    var totalPicWSlider = $(".wSliderItem").length;
    var wNextPic = 0;

    if (wNextPic == 0) {
        $("#nextWSlider").css("display", "none");
    }

    $("#nextWSlider").click(function () {
        if (wNextPic == 0) {
            $("#nextWSlider").css("display", "none");
        }

        $("#preWSlider").css("display", "block");
        $("#wSlider").find(".wSliderItem").eq(wNextPic).animate({
            width: 'toggle'
        }, 350);
        wNextPic -= 1;
    });
    $("#preWSlider").click(function () {
        if (wNextPic == totalPicWSlider - 3) {
            $("#preWSlider").css("display", "none");
        }

        $("#nextWSlider").css("display", "block");
        $("#wSlider").find(".wSliderItem").eq(wNextPic).animate({
            width: 'toggle'
        }, 350);
        wNextPic += 1; //پایان اسلایدر سوم
    });

    if (screen.availWidth < 768) {
        $("#menusite").css("display", "none");
    }

    if (screen.availWidth > 768) {
        $("#navMain").addClass("sticky-top");
    } ///////////////////////Student /////////////////


    hideStudentInfo();
    $("#stuInfoTextContent").show();
    $("#stuInfoText").css("active");
    $("#stuInfoText").click(function () {
        hideStudentInfo();
        $("#stuInfoTextContent").show();
        $("#stuInfoText").css("active");
    });
    $("#stuInformation").click(function () {
        hideStudentInfo();
        $("#stuInformationContent").show();
        $("#stuInformation").css("active");
    });
    $("#stuInfoFile").click(function () {
        hideStudentInfo();
        $("#stuInfoFileContent").show();
        $("#stuInfoFile").css("active");
    });
    $("#stuInfoStatus").click(function () {
        hideStudentInfo();
        $("#stuInfoStatusContent").show();
        n;
        $("#stuInfoStatus").css("active");
    });

    function hideStudentInfo() {
        $("#stuInfoTextContent").hide();
        $("#stuInformationContent").hide();
        $("#stuInfoFileContent").hide();
        $("#stuInfoStatusContent").hide();
        $("#stuInfoText").css("btn-primary");
        $("#stuInformation").css("btn-primary");
        $("#stuInfoFile").css("btn-primary");
        $("#stuInfoStatus").css("btn-primary");
    }

    $('#usersRoll').on('change', function (e) {
        var role = jQuery(this).val();

        if (role) {
            jQuery.ajax({
                url: '/ajax-usersRoll/' + role,
                type: "GET",
                dataType: "json",
                success: function success(data) {
                    var user = [];
                    console.log(data);
                    jQuery('select[name="ajaxUser"]').empty();
                    jQuery.each(data, function (key, value) {
                        $('select[name="ajaxUser"]').append('<option  value=' + value.cod + '>' + value.cod + "   " + value.lastname + "  " + value.name + '</option>');
                    });
                }
            });
        } else {
            $('select[name="ajaxUser"]').empty();
        }
    });

    function ShowMessage($correspondence) {
        $('#studentMessage').append('<h3>{{__(' + $correspondence.title + ')}}</h3><p>{{__(' + $correspondence.description + ')}}</p>');
    };
});
$(document).scroll(function () {});
