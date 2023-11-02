<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forbidden 403</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/403.css') }}">
</head>

<body>
    <div class="gandalf">
        <div class="fireball"></div>
        <div class="skirt"></div>
        <div class="sleeves"></div>
        <div class="shoulders">
            <div class="hand left"></div>
            <div class="hand right"></div>
        </div>
        <div class="head">
            <div class="hair"></div>
            <div class="beard"></div>
        </div>
    </div>
    <div class="message">
        <h1>403 - You Shall Not Pass</h1>
        <p>Uh oh, Gandalf is blocking the way!<br />Maybe you have a typo in the url? Or you meant to go to a different
            location? Like...<a style="text-decoration: none; color: orangered" href="{{ route('dashboard') }}"><b>Hobbiton?</b></a></p>
    </div>

</body>

</html>
