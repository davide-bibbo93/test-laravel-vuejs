<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='{{asset('css/app.css')}}'>
    <title>Laravel-VueJs</title>
</head>
<body>

    <div id="app">
        <base-component v-for="(videogame, index) in catalogue"
        :key = "index"
        :catalogue = "videogame"
        />
    </div>

    <script src='{{ asset('js/app.js') }}'></script>
</body>
</html>
