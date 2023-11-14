<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
  <x-header />
<main>
  <div class="container">
    <h1 class="text-center">Регистрация</h1>
    <form method="POST" action="/registration-valid">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
        <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
        @error('email')
        <div class="alert alert-danger" role="alert">
         {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="YourName" class="form-label">Имя</label>
        <input type="name" class="form-control" id="YourName" aria-describedby="emailHelp" name="name">
        @error('email')
        <div class="alert alert-danger" role="alert">
         {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{old('password')}}">
          @error('password')
          <div class="alert alert-danger" role="alert">
           {{$message}}
          </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_pass" value="{{old('confirm_pass')}}">
        @error('confirm_pass')
        <div class="alert alert-danger" role="alert">
         {{$message}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
    </form>
  </div>
</main>
</body>
</html>