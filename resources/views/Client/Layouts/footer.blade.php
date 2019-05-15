@section('footer')
    <script src="{{asset('public/client/')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('public/client/')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('public/client/')}}/js/jquery-ui.js"></script>
    <script src="{{asset('public/client/')}}/js/popper.min.js"></script>
    <script src="{{asset('public/client/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/client/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/client/')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('public/client/')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('public/client/')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('public/client/')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('public/client/')}}/js/aos.js"></script>

    <script src="{{asset('public/client/')}}/js/main.js"></script>
    <script src="{{asset('public/client/')}}/js/scrollTop.js"></script>



    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    {{--<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">--}}



    <script>
        // ===== Scroll to Top ====
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
    </script>

    </body>
    </html>
@endsection