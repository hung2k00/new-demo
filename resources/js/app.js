// app.js

require('./bootstrap');

import Vue from 'vue';
import { createApp } from 'vue';
import HotelList from './components/HotelListComponent.vue';
import HotelCreate from './components/HotelCreate.vue';
import HotelEdit from './components/HotelEditComponent.vue';
import '../css/app.css';
import 'toastify-js/src/toastify.css';
const app = createApp({});
app.component('hotel-list', HotelList);
app.component('hotel-create', HotelCreate);
app.component('hotel-edit', HotelEdit);
app.mount('#app');

function updateUlPosition() {
    var imgPosition = $("#unhiddenUl").offset();
    var ulWidth = $("#ulHeader").width();
    var top = imgPosition.top + $("#unhiddenUl").height();
    if ($(window).width() <= 900) {
        var right = imgPosition.left / ulWidth;
        console.log(right);
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
$("#unhiddenUl").click(function() {
    $("#ulHeader").toggleClass("hidden");
});
const slides = $(".slide");
let currentIndex = 0;
slides.eq(currentIndex).addClass("active");

function nextSlide() {
    slides.eq(currentIndex).removeClass("active");
    currentIndex = (currentIndex + 1) % slides.length;
    slides.eq(currentIndex).addClass("active");
}
setInterval(nextSlide, 3000);

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
