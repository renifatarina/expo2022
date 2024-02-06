<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Daftar orma sekarang juga bersama EXPO AMIKOM 2022!">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="icon" href="{{asset('/assets/images/new/logo.svg')}}" type="image/icon type">

    <title>EXPO AMIKOM 2022</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>
    {{-- Navbar start --}}
    @include('template.navbar')
    {{-- Navbar end --}}

    @yield('content')

    {{-- Footer start --}}
    @include('template.footer')
    {{-- Footer end --}}

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('/assets/js/tabs.js')}}"></script>
    <script src="{{asset('/assets/js/popup.js')}}"></script>
    <script src="{{asset('/assets/js/custom.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('atribut')
</body>

</html>
