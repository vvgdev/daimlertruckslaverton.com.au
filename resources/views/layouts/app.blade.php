<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="facebook-domain-verification" content="o7ir1beu1q9ef5sbj6nf502otpceq5">
        <title>Truck Sales Melbourne | Daimler Truck Sales, Service & Parts VIC - Daimler Trucks Laverton</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $locationDetails[0]->meta_description }}">
        <meta name="title" content="{{ $locationDetails[0]->meta_title }}">
        <meta name="keywords" content="{{ $locationDetails[0]->meta_keywords }}">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/event-tracking.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/homeslider.css" rel="stylesheet">
        <link href="/css/DTMFontIcons.css" rel="stylesheet">
        <link href="/css/aos.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> 
        <link href="/css/style.css" rel="stylesheet">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X9M317QS0L"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X9M317QS0L');
        </script>
        {!! $locationDetails[0]->schema_markup !!}
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('js/aos.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/swiper.jquery.min.js') }}"></script>
        <script defer src="{{ asset('js/select2.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
