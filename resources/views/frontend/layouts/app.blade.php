<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/scss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')

    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

</head>

<body>

    <!-- WRAPPER
=====================================================================================================================-->
    <div class="ts-page-wrapper @yield('bokeh') @yield('home') " id="page-top">

        @include('frontend.layouts.header')

        @yield('slider')

        <!--*********************************************************************************************************-->
        <!-- MAIN ***************************************************************************************************-->
        <!--*********************************************************************************************************-->

        <main id="ts-main">
            @yield('stk')
            @yield('content')

        </main>

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->

        @include('frontend.layouts.footer')
        <!--end #ts-footer-->
        <div class="nav-bottom">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top"><button type="button" class="closePopup">
                        <i class="material-icons icon-font-color">close</i>
                    </button>
                    <p>Hello, 😊 Butuh bantuan?</p>
                </div>
                <div class="content-whatsapp -bottom">
                    <input class="whats-input" id="whats-in" type="text" Placeholder="Send message..." />
                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black">send</i>
                    </button>

                </div>
            </div>
            <button type="button" id="whats-openPopup" class="whatsapp-button">
                <img class="icon-whatsapp" src="https://image.flaticon.com/icons/svg/134/134937.svg">
            </button>
            <div class="circle-anime"></div>
        </div>
    </div>
    <!--end page-->

    <script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

    @yield('script')

    <script>
        popupWhatsApp = () => {

            let btnClosePopup = document.querySelector('.closePopup');
            let btnOpenPopup = document.querySelector('.whatsapp-button');
            let popup = document.querySelector('.popup-whatsapp');
            let sendBtn = document.getElementById('send-btn');

            btnClosePopup.addEventListener("click", () => {
                popup.classList.toggle('is-active-whatsapp-popup')
            })

            btnOpenPopup.addEventListener("click", () => {
                popup.classList.toggle('is-active-whatsapp-popup')
                popup.style.animation = "fadeIn .6s 0.0s both";
            })

            sendBtn.addEventListener("click", () => {
                let msg = document.getElementById('whats-in').value;
                let relmsg = msg.replace(/ /g, "%20");
                //just change the numbers "1515551234567" for your number. Don't use +001-(555)1234567     
                window.open('https://wa.me/628990466363?text=' + relmsg, '_blank');

            });

            setTimeout(() => {
                popup.classList.toggle('is-active-whatsapp-popup');
            }, 3000);
        }

        popupWhatsApp();

    </script>
</body>

</html>
