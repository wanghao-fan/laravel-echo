<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Echo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
</head>
<body>
<div class="flex-center position-ref full-height">
    Echo
</div>
<script>
    @if(!empty(Auth::user()))
        window.id = "{{Auth::user()->id}}"
    @endif
</script>
<script src="/js/app.js"></script>
</body>
</html>
