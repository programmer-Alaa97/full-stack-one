@yield('js')

<!-- jQery -->
<script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- popper js -->
<script src="../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<!-- owl slider -->
{{-- <script src="../../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

<!-- isotope js -->
<script src="../../unpkg.com/isotope-layout%403.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
{{-- <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script> --}}
<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
<!-- custom js -->
<script src="{{ URL::asset('js/custom.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&amp;callback=myMap">
</script>
<!-- End Google Map -->
