<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Demo-Landing Page</title>
</head>

<body>
    <header class="">
        <div class="flex justify-center items-center pt-1 header_menu">
            <div class="relative cursor-pointer menu_items">
                <img src="{{ asset('/images/menu.png') }}" alt="" class="h-8 w-8 " id="unhiddenUl">
            </div>
            <div class="cursor-pointer header_logo">
                <img src="{{ asset('/images/logo.png') }}" alt="" class="w-36 h-20 ">
            </div>
            <div class="flex justify-center items-center rounded-3xl cursor-pointer header_download relative" id="unhidden_app">
                <img src="{{ asset('/images/direct-download.png') }}" alt="" class="h-5 w-5">
                <div>
                    <p class="text-white pl-2 pt-3" id="downloadText">Tải app ngay</p>
                </div>
                <div class="absolute top-[3rem] z-10 w-[20rem] h-[20rem] hidden" id="download_app">
                    <img src="{{ asset('images/download_app.png') }}" alt="">
                </div>
            </div>
        </div>
        <ul class="absolute w-56 bg-white p-4 rounded-lg shadow-2xl shadow-slate-700 border hidden border-zinc-700"
            id="ulHeader">
            <li>Về chúng tôi</li>
            <li>Tính năng nổi bật</li>
            <li>Khám phá du lịch</li>
            <li>Cơ hội</li>
            <li>Đối tác</li>
        </ul>
    </header>
    <main>
        <div class="slider">
            <img src="{{ asset('images/slider.png') }}" alt="hehhh" class="relative slide">
            <img src="{{ asset('images/R.png') }}" alt="hehhh" class="slide">
            <div class="all_text_slide flex  text-white items-center">
                <div class="flex gap-36 all_text items-center p-4">
                    <div class="left_arrow"><img src="{{ asset('images/left_arrow.png') }}" alt=""></div>
                    <div class="">
                        <p class="first_text">Chào mừng đến với hệ sinh thái</p>
                        <div class="flex all_sentrip relative">
                            <p class="sentrip">SENTRIP</p>
                            <div class="absolute top-1 -right-10 sentrip_img">
                                <img src="{{ asset('images/hoa.png') }}" alt="">
                            </div>
                        </div>
                        <p class="italic last_text">Nhận ngay những thông tin du lịch hấp dẫn</p>
                    </div>
                </div>
                <div class="ml-auto p-4 right_arrow">
                    <img src="{{ asset('images/right_arrow.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="wave_box absolute">
                <img src="{{ asset('images/wave1.png') }}" alt="">
            </div>
            <div class="relative z-10">
                <div class="flex justify-center items-center">
                    <div class="text_info mt-[8rem]">
                        <div class="">
                            <h1>Thông tin chung</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/line_underInfo.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="full_info flex gap-[4rem] justify-center items-center">
                    <div class="-ml-[24rem] -mt-[5rem] flower_info">
                        <img src="{{ asset('images/flower_Info.png') }}" alt="Flower">
                    </div>
                    <div class="text_slide_info">
                        <img src="{{ asset('images/TextInfo.png') }}" alt="">
                    </div>
                    <div class="image-slider">
                        <div class="image-slider1">
                            <img src="{{ asset('images/slide_info1.png') }}" alt="">
                        </div>
                        <div class="image-slider2">
                            <img src="{{ asset('images/slide_info2.png') }}" alt="">
                        </div>
                        <div class="image-slider3">
                            <img src="{{ asset('images/slide_info3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="under_info relative">
            <div class="-mt-[4rem]">
                <img src="{{ asset('images/UnderInfo.png') }}" alt="">
            </div>
            <div class="absolute top-[3rem] flex justify-center items-center all__items--underInfo">
                <div class="flex w-1/3 gap-6">
                    <div class="-mt-[3rem]">
                        <img src="{{ asset('images/underInfo1.png') }}" alt="">
                    </div>
                    <div class="relative all__items_phone">
                        <div class="absolute top-[5rem] -left-[2rem] z-100">
                            <img src="{{ asset('images/underInfo2.png') }}" alt=""
                                class="rounded-full h-[2.5rem] w-[2.5rem]">
                        </div>
                        <div class="">
                            <img src="{{ asset('images/phoneUnderInfo.png') }}" alt="">
                        </div>
                        <div class="absolute top-[3.5rem] px-8 z-100 icon__app">
                            <img src="{{ asset('images/Icon_app.png') }}" alt="" class="h-[10vh] w-[8rem]">
                        </div>
                    </div>
                    <div class="mt-[8rem]">
                        <img src="{{ asset('images/underInfo3.png') }}" alt="">
                    </div>
                </div>
                <div class="text__underInfo w-2/5">
                    <p>Khám phá các trải nghiệm mới và ưu đãi đọc quyền của <span class="text-pink-600">SenTRip</span>
                    </p>
                </div>
                <div class="w-1/3 qr__download">
                    <div class="px-4">
                        <img src="{{ asset('images/QR.png') }}" alt="">
                    </div>
                    <div class="flex justify-center items-center rounded-3xl cursor-pointer header_download w-[50%]">
                        <p class="text-white pt-3">Tải app ngay</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden text_info">
            <div class="mt-5">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/ghim.png') }}" alt="">
                </div>
                <p class="text-center px-5">SenTrip là sản phẩm hợp tác chiến lược của Tổng cục Du lịch, Đài Truyền
                    Hình Việt Nam, Tập đoàn
                    Công nghiệp- Viễn thông Quân đội & Công ty Cổ phần Đầu tư và Phát triển Công nghệ Truyền thông
                    Nam Việt.</p>
            </div>
            <div class="mt-5">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/ghim.png') }}" alt="">
                </div>
                <p class="text-center px-5">Hệ sinh thái du lịch chính thống, uy tín bậc nhất Việt Nam. Hoạt động trên
                    các nền tảng: Ứng
                    dụng, Website và Tổng đài Du lịch Việt Nam 1039.</p>
            </div>
            <div class="mt-5">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/ghim.png') }}" alt="">
                </div>
                <p class="text-center px-5">Sentrip hỗ trợ du khách trong nước và quốc tế một cách toàn diện nhất, giúp
                    du khách có được
                    chuyến đi thuận lợi, an toàn và vui vẻ.</p>
            </div>
        </div>
        <div class="main__feature">
            <div class="main__feature-info container">
                <div class="flex justify-center items-cente">
                    <img src="{{ asset('images/hoa_pink.png') }}" alt="">
                </div>
                <div class="flex justify-center items-center mt-3">
                    <p class="text-4xl font-semibold">Tính năng <span class="text-2xl text-pink-600">nổi bật</span>
                    </p>
                </div>
                <div class="flex justify-center items-center -m-4">
                    <img src="{{ asset('images/line_underInfo.png') }}" alt="">
                </div>
            </div>
            <div class="main__feature-items flex gap-[7rem]">
                <div class="fly_airplane w-[15%]">
                    <div class="relative">
                        <div>
                            <img src="{{ asset('images/fly_1.png') }}" alt="">
                        </div>
                        <div class="absolute top-[10rem] left-[1rem] -rotate-[35deg]">
                            <img src="{{ asset('images/airplane1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-[70%]">
                    <div class="phone-feature flex gap-[2rem]">
                        <div class="phone-items">
                            <img src="{{ asset('images/phone_feature.png') }}" alt="">
                        </div>
                        <div class="feature-items mt-[4rem]">
                            <div class="flex feature-items__text">
                                <div class="flex w-1/2 gap-[2rem] mix_feature">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/map_feature.png') }}" alt="">
                                    </div>
                                    <div class="relative">
                                        <p class="text_label">Gian hàng địa phương</p>
                                        <p class="text_p">Gợi ý các điểm nổi bật, những xu hướng du lịch thu hút</p>
                                        <div class="absolute -top-[2rem]">
                                            <img src="{{ asset('images/line_feature.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/light.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Gợi ý thông minh</p>
                                        <p class="text_p">Gợi ý thông minh theo hành vi khách hàng: Đi đâu? Ở đâu? Ăn
                                            gì? Chơi gì?</p>
                                    </div>

                                </div>
                            </div>
                            <div class="flex feature-items__text">
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/search.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Tìm kiếm</p>
                                        <p class="text_p">Gợi ý các điểm đến nổi bật, những xu hướng du lịch thu hút
                                        </p>
                                    </div>
                                </div>
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/passport.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Tạo lịch trình</p>
                                        <p class="text_p">Tự tạo lịch trình chuyến đi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex feature-items__text">
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/binder.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Kho nội dung</p>
                                        <p class="text_p">Booking về máy bay, tour, khách sạn, nhà hàng</p>
                                    </div>
                                </div>
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/chatbot.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">CHATBOT</p>
                                        <p class="text_p">Mạng xã hội chuyên biệt cho người du lịch</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex feature-items__text">
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/travel-agency.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Tổng đài du lịch</p>
                                        <p class="text_p">Tổng đài chăm sóc và hỗ trợ du lịch Việt Nam 1039</p>
                                    </div>
                                </div>
                                <div class="flex w-1/2 gap-[2rem]">
                                    <div class="feature-items__img">
                                        <img src="{{ asset('images/wheel.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="text_label">Vòng quay may mắn</p>
                                        <p class="text_p">Trải nghiệm truyền hình trực tuyến mọi lúc mọi nơi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-[15%]">
                    <div class="relative fly_2">
                        <div class="float-right ">
                            <img src="{{ asset('images/fly_2.png') }}" alt="">
                        </div>
                        <div class="absolute -top-[5rem] fly_2_img1">
                            <img src="{{ asset('images/items_feature.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex float-right -mt-[5rem] under_feature">
            <div class="relative">
                <img src="{{ asset('images/underFeature3.png') }}" alt="" class="under_feature_img1">
                <div class="absolute -left-[6rem] top-[3rem] under_feature_img">
                    <img src="{{ asset('images/underFeature.png') }}" alt="">
                </div>
                <div class="absolute top-[5rem] under_feature_img under_feature_img2">
                    <img src="{{ asset('images/underFeature2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="main__feature-items slider-container">
            <div class="feature-items_2 mt-[4rem] hidden mix-features">
                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/map_feature.png') }}" alt="">
                    </div>
                    <div class="relative">
                        <p class="text_label">Gian hàng địa phương</p>
                        <p class="text_p">Gợi ý các điểm nổi bật, những xu hướng du lịch thu hút</p>
                        <div class="absolute -top-[2rem]">
                            <img src="{{ asset('images/line_feature.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/light.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Gợi ý thông minh</p>
                        <p class="text_p">Gợi ý thông minh theo hành vi khách hàng: Đi đâu? Ở đâu? Ăn
                            gì? Chơi gì?</p>
                    </div>

                </div>

                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/search.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Tìm kiếm</p>
                        <p class="text_p">Gợi ý các điểm đến nổi bật, những xu hướng du lịch thu hút
                        </p>
                    </div>
                </div>
                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/passport.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Tạo lịch trình</p>
                        <p class="text_p">Tự tạo lịch trình chuyến đi</p>
                    </div>
                </div>

                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/binder.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Kho nội dung</p>
                        <p class="text_p">Booking về máy bay, tour, khách sạn, nhà hàng</p>
                    </div>
                </div>
                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/chatbot.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">CHATBOT</p>
                        <p class="text_p">Mạng xã hội chuyên biệt cho người du lịch</p>
                    </div>
                </div>

                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/travel-agency.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Tổng đài du lịch</p>
                        <p class="text_p">Tổng đài chăm sóc và hỗ trợ du lịch Việt Nam 1039</p>
                    </div>
                </div>
                <div class="mix_feature">
                    <div class="feature-items__img">
                        <img src="{{ asset('images/wheel.png') }}" alt="">
                    </div>
                    <div>
                        <p class="text_label">Vòng quay may mắn</p>
                        <p class="text_p">Trải nghiệm truyền hình trực tuyến mọi lúc mọi nơi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="last__slider">
            <div class="container last__slider-text mt-[16rem]">
                <div class="flex justify-center items-center mt-[3rem] min-w-full">
                    <h1>Khám phá du lịch</h1>
                </div>
                <div class="flex justify-center items-center -mt-5">
                    <img src="{{ asset('images/line_underInfo.png') }}" alt="" class="h-[2rem] w-[10rem] ">
                </div>
                <div class="flex justify-center items-center mt-4">
                    <p>Cùng khám phá những địa điểm nổi tiếng của Việt Nam</p>
                </div>
            </div>
            <div class="last__slider-img relative h-full">
                <div class="swiper mySwiper overflow-hidden">
                    <div class="swiper-wrapper flex overflow-hidden">
                      <div class="swiper-slide">
                        <img src="{{ asset('images/last_slider1.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('images/last_slider2.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('images/last_slider3.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('images/last_slider4.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('images/last_slider5.png') }}" />
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
        <div class="partner">
            <div class="partner_full flex justify-center items-center gap-[9rem]">
                <div class="partner_form w">
                    <div class="text-white">
                        <p class="partner_form-text">Đối tác quan tâm vui lòng để lại thông tin để được tư vấn giải đáp</p>
                    </div>
                    <form action="">
                        <div>
                            <input type="text" name="name" id="name" placeholder="*Họ và tên">
                        </div>
                        <div class="mt-3">
                            <input type="text" name="phone_number" id="phone_number" placeholder="*Số điện thoại">
                            <p class="small">(*mọi thông tin đều được bảo mật)</p>
                        </div>
                        <div>
                            <input type="text" name="capcha" id="capcha" placeholder="*Nhập mã Capcha">
                        </div>
                        <button type="submit" >Gửi</button>
                    </form>
                </div>
                <div class="partner_text">
                    <div class="mt-[2rem]">
                        <h1>Cơ hội chưa từng có</h1>
                        <img src="{{ asset("images/line_partner.png") }}" alt="" class="-mt-[1rem]">
                    </div>
                    <div>
                        <h2>Khi trở thành đối tác của Sentrip</h2>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img fix_img">
                            <img src="{{ asset("images/partner_item1.png") }}" alt="" class="">
                        </div>
                        <div>
                            <p>Tham gia sân chơi đẳng cấp cùng các đối tác uy tín và tiềm năng, trong nước cũng như quốc tế.</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img">
                            <img src="{{ asset("images/partner_item2.png") }}" alt="">
                        </div>
                        <div>
                            <p>Xây dựng giá trị thương hiệu bền vững.</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img">
                            <img src="{{ asset("images/partner_item3.png") }}" alt="">
                        </div>
                        <div>
                            <p>Xây dựng giá trị thương hiệu bền vững.</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img">
                            <img src="{{ asset("images/partner_item4.png") }}" alt="">
                        </div>
                        <div>
                            <p>Cơ hội tiếp cận hơn 65 triệu khách hàng của Viettel.</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img fix_img">
                            <img src="{{ asset("images/partner_item5.png") }}" alt="">
                        </div>
                        <div>
                            <p>Tư vấn, hỗ trợ xây dựng chiến lược truyền thông & marketing với các chuyên gia đầu ngành.</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[8%] partner_text-img fix_img">
                            <img src="{{ asset("images/partner_item6.png") }}" alt="">
                        </div>
                        <div >
                            <p>Cập nhật các nghiên cứu, báo cáo & phân tích xu hướng khách hàng tiềm năng.</p>
                        </div>
                    </div>
                    <div class="button_partner justify-center items-center hidden">
                        <button type="submit" >Liên hệ hợp tác</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsors flex gap-[5rem] justify-center items-center">
            <div class="">
                <p>Các đơn vị tham gia</p>
                <div class="-mt-[2rem]"><img src="{{ asset('images/line_underInfo.png') }}" alt=""></div>
            </div>
            <div class="flex gap-4">
                <div>
                    <img src="{{ asset('images/sponsors1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/sponsors2.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/sponsors3.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/sponsors4.png') }}" alt="">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript">
        function updateImages() {
            var windowWidth = $(window).width();
            if (windowWidth < 900) {
                $(".image-slider2 img").attr("src", "{{ asset('images/slide_info2_fix.png') }}");
                $(".image-slider3 img").attr("src", "{{ asset('images/slide_info3_fix.png') }}");
            } else {
                $(".image-slider2 img").attr("src", "{{ asset('images/slide_info2.png') }}");
                $(".image-slider3 img").attr("src", "{{ asset('images/slide_info3.png') }}");
            }
        }
        updateImages();
        $(window).on("resize", updateImages);
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
