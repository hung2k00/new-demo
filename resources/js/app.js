// app.js

require('./bootstrap');
//header
function updateUlPosition() {
    var imgPosition = $("#unhiddenUl").offset();
    var ulWidth = $("#ulHeader").width();
    var top = imgPosition.top + $("#unhiddenUl").height();
    if ($(window).width() <= 900) {
        var right = imgPosition.left / ulWidth;
        $("#unhiddenUl, #ulHeader").css({
            top: top + "px",
            right: right + "px",
            left: "auto"
        });
    } else {
        var left = imgPosition.left - (ulWidth / 6);
        $("#unhiddenUl, #ulHeader").css({
            top: top + "px",
            left: left + "px",
            right: "auto"
        });
    }
}
updateUlPosition();
$(window).resize(updateUlPosition);
$("#unhiddenUl").click(function (e) {
    e.stopPropagation();
    $("#ulHeader").toggleClass("hidden");
});
$(document).click(function (e) {
    if (!$(e.target).closest("#ulHeader").length && !$(e.target).is("#ulHeader")) {
        $("#ulHeader").addClass("hidden");
    }
});
$("#unhidden_app").click(function (e) {
    e.stopPropagation();
    $("#download_app").toggleClass("hidden");
});
$(document).click(function (e) {
    if (!$(e.target).closest("#download_app").length && !$(e.target).is("#download_app")) {
        $("#download_app").addClass("hidden");
    }
});
function changeDownloadText() {
    var downloadText = $("#downloadText");
    if ($(window).width() <= 900) {
        downloadText.text("Tải ngay");
    } else {
        downloadText.text("Tải app ngay");
    }
}
$(window).on("load", changeDownloadText);
$(window).on("resize", changeDownloadText);
//Slider
var swiperSlide = new Swiper(".mySwiperSlide", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".right_arrow",
        prevEl: ".left_arrow",
    }
});
var swiperTextSlide = new Swiper(".mySwiperTextSlide", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});
var swiperVideo = new Swiper(".swiperVideo", {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});
var swiperSponsers = new Swiper(".swiperSponsers", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});
var swiper_1 = new Swiper(".mySwiper", {

    effect: "coverflow",
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 3,
    loop: true,
    coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
});

var swiperFeature = new Swiper(".swiperFeature", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
if ($(window).width() < 900) {
    $(".main__feature-items").removeClass("hidden");
}

//Slide Video
var swiperPlay1 = new Swiper(".mySwiperPlay", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiperPlay2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
