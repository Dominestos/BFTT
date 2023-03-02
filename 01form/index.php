<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="/01form/assets/js/main.js"></script>
    <script src="/01form/assets/js/jquery.maskedinput.min.js"></script>
    <title>Форма выбора запчастей</title>
</head>
<body>
    <div class="container 1">
    <form action="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <select id="auto" name="auto" class="form-select my-2" aria-label="Default select example">
            <option value="default" selected>Марка машины</option>
            <option value="audi">Audi</option>
            <option value="renault">Renault</option>
            <option value="bmw">BMW</option>
        </select>
        <select id="model" name="model" class="model-Audi-select my-2">
            <option value="default" selected>Модель</option>
        </select>
        <select class="form-select my-2" name="detailType">
            <option selected>Тип запчасти</option>
            <option value="Бампер передний">Бампер передний</option>
            <option value="Бампер задний">Бампер задний</option>
            <option value="Крышка капота">Крышка капота</option>
            <option value="Дверь водительская">Дверь водительская</option>
            <option value="Дверь пассажирская">Дверь пассажирская</option>
            <option value="Дверь задняя левая">Дверь задняя левая</option>
            <option value="Крыло правое">Крыло правое</option>
            <option value="Фара противотуманная">Фара противотуманная</option>
        </select>
        <div class="my-2">
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email адрес">
        </div>
        <div class="input-group my-2">
            <!-- <span class="input-group-text" id="inputGroup-sizing-default">+375</span> -->
            <input type="tel" id="phone" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Номер телефона">
        </div>
        <button class="btn btn-primary" type="submit">Подтвердить</button>
    </form>
    </div>
    <div class="container">

    </div>    

</body>
</html>