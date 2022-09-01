<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="facebook-domain-verification" content="o7ir1beu1q9ef5sbj6nf502otpceq5">
        <title>@yield('title','Daimler Trucks Laverton')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="@yield('meta_title','Daimler Trucks Laverton')">
        <meta name="keywords" content="@yield('meta_keywords','Daimler Trucks Laverton')">
        <meta name="description" content="@yield('meta_description','Daimler Trucks Laverton')">
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
        <script type="application/ld+json">
            {
                "@context": "http://schema.org/",
                "@type": "AutoDealer",
                "name": "Daimler Trucks Laverton",
                "description": "Looking for your next truck in Melbourne. Visit the team at Daimler Trucks Laverton for all of your commercial vehicle requirements, including Sales Service & Parts!",
                "image": "https://www.daimlertruckslaverton.com.au/images/daimlertrucks_laverton_logo.jpeg",
                "url": "http://www.daimlertruckslaverton.com.au",
                "logo": "https://www.daimlertruckslaverton.com.au/images/daimlertrucks_laverton_logo.jpeg",
                "sameAs": ["https://www.facebook.com/DTLaverton/", "https://www.instagram.com/daimlertruckslaverton/", "https://www.linkedin.com/company/daimler-trucks-laverton/"],
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Truganina",
                    "addressRegion": "VIC",
                    "postalCode": "3029",
                    "streetAddress": "423 Boundary Road"
                },
                "telephone": "(03) 9680 8777",
                "openingHours": ["Mo-Fr 8:00-18:00", "Sa 8:00-12:00"]
            }
        </script>
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
