<!doctype html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Калькулятор стоимости доставки сырья</h1>
<div class="container text-center">
    <div class="row g-2 py-5">
        <div class="col">
            <div class="form-floating">
            допустим

            </div>
        </div>
        <div class="col">
            <div class="form-floating">
            1
            </div>
        </div>
        <div class="col">
            <div class="form-floating">

            </div>
        </div>
    </div>
    <div class="row justify-content-md-center py-5">
        <div class="col">

        </div>
    </div>
    <div class="row justify-content-md-center py-5" id="result-container"></div>
</div>
</body>
</html>
