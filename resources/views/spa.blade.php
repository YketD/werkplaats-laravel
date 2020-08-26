<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,700&display=swap" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/prismic-vue"></script>
    <script>
        window.prismic = {
            endpoint: 'https://werkplaats75c.prismic.io/api/v2'
        };
    </script>
    <script src="https://static.cdn.prismic.io/prismic.min.js"></script>
    <title>Werkplaats75C - Flexibele werkpleken</title>
    <meta name="description"
          content="Werkplaats75C biedt fijne Flexibele werkplekken, met vergader- en workshopruimte, flexibele openingstijden voor zzp-ers en co-workers.">
</head>
<body>
    <noscript>
        <strong>We're sorry but werkplaats75c doesn't work properly without JavaScript enabled. Please enable it to
                continue.</strong>
    </noscript>
    <div id="app"></div>
    <!-- built files will be auto injected -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

