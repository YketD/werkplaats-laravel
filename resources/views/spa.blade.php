<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,700&display=swap" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/prismic-vue"></script>
    <script>
        window.prismic = {
            endpoint: 'https://werkplaats75c.prismic.io/api/v2'
        };
    </script>
    <script src="https://static.cdn.prismic.io/prismic.min.js"></script>
    <title>werkplaats75c</title>
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

