// @codekit-prepend "vendor/jquery.slides.min.js"
// @codekit-prepend "_map.js"

jQuery(document).ready(function ($) {

    $("body > header").on("click", "#burger", function (event) {
        event.preventDefault();
        $("body > header nav").toggleClass("show");
    });

    oneImage();

    $(document).scroll(function () {

        var pos = $(document).scrollTop();


        if (pos >= 0 && pos <= 200) {
            $("div.logowhite").css("opacity", (-Math.pow((pos / 2), 2)) / 10000 + 1);
        } else if (pos >= 200) {
            $("div.logowhite").css("opacity", 0);
        } else if (pos <= start) {
            $("div.logowhite").css("opacity", 1);
        }
    });

    $(window).resize(function () {

        oneImage();
    });

    function oneImage() {
        $("div.oneimage").each(function () {
            var wImage = $(this).width();

            var ratio = 1;

            if($("body").width() <= 500 && $(this).data("height-mobile")) {
                ratio = $(this).data("height-mobile") / $(this).data("width");
            } else {
                ratio = $(this).data("height") / $(this).data("width");
            }

            $(this).height(wImage * ratio);
        });
    }

    /*
     *  pos: 0 -> 100
     */
    function header(pos) {

        var header = $("body > header");

        $(header).height(68 - (pos * 0.68) + 64);

        $("#logo", header).css("opacity", ((100 - pos) / 100));
        $("#logo, #logo2", header).height((100 - pos) * 0.5 + 50);
        $("#logo, #logo2", header).width((100 - pos) * 1.41 + 141);
        $("#logo, #logo2", header).css("marginTop", (100 - pos) * 0.05 + 6);
        $("nav", header).css("marginTop", ((100 - pos) * 0.28 + 2));

    }


    $(".slidesjs").each(function () {

        var slider = $(this);

        var option = {
            width: 1320,
            height: slider.data("height"),
            navigation: {
                active: false
            },
            pagination: {
                active: false
            }
        };

        if (slider.data("size") != 1) {

            option.navigation = {
                active: true,
                effect: "fade"
            };

            option.pagination = {
                active: true,
                effect: "fade"
            };

            if (!slider.data("nav")) {
                option.navigation = {
                    active: false
                };
            }

            if (!slider.data("pag")) {
                option.pagination = {
                    active: false
                };
            }

            option.effect = {
                fade: {
                    speed: 400
                }
            };

            option.play = {
                effect: "fade",
                interval: 5000,
                auto: true,
                swap: true,
                restartDelay: 2500
            };
        }

        slider.slidesjs(option);
    });
});
