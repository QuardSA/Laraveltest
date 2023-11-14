<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <x-header/>
<main>
    <br>
    <div class="container">
        <div class="block-info-personal d-flex flex-wrap justify-content-center">
            <div class="info text-center">
                <img src="storage/images/default.png" class="img-thumbnail" alt="тут должна быть картинка">
                <p class="text fs-5 fw-semibold">Фамилия Имя Отчество</p>
                <p class="text fs-5 fw-semibold">e-mail</p>
            </div>
            <div class="editor">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Имя</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Отчество</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Пароль</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Выберите фото</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                  </form>
            </div>
        </div>
        <hr>
        <div class="notifications">
            <p class="fs-2 text-center">Мои курсы</p>
            <div class="courses d-flex flex-wrap">
                <div class="card" style="width: 18rem;">
                    <img src="storage/images/default.png" class="card-img-top" alt="Тут должна быть картинка">
                    <div class="card-body">
                      <h5 class="card-title">Название</h5>
                      <p class="card-text">Описание</p>
                      <p class="card-text">Продолжительность курса 
                        <b></b>
                      </p>
                      <p class="card-text">Стоимость
                        <b></b>
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <br>
</main>
</body>
</html>