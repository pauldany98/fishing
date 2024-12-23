<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p class="head"> {{$data['body']}} </p>
<p  class="body"> {{$data['title']}} </p>
</body>
<style>
    .head{
        font-size: 20px;
        font-weight: bold;
        color: #000;
    }
    .body{
        font-size: 16px;
        color: #000;
        background: #dbdada;
        padding: 10px;
        border-radius: 10px;
    }
</style>
</html>