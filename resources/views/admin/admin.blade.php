<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
    a>img{
        width: 25px;
    }
</style>
<body>
  <x-admin.header />
<main>
    <section>
        <div class="container">
            <h2 class="m-3">Список заявок</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Курс</th>
                    <th scope="col">Дата Заявки</th>
                    <th scope="col">Статус</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_applications as $item)
                    <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td>{{$item->email}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->course_id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>
                      @if($item ->is_confirm== 0)
                        Не подтверждено
                      @else
                        Подтверждено
                      @endif
                      </td>
                      <td>
                      @if($item ->is_confirm== 0)
                        <a href="/application/{{$item->id}}/confirm">
                            <img src="storage\images\fad633ee-765e-43ec-b2f2-e58aaebdb93d.png" alt="Принять">
                        </a>
                      </td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>
    </section>
    <section>
      {{session()->get('alert')}}
        <div class="container">
            <h2 class="m-3">
                Создание курса
              </h2>
                <form method="POST" action="/course/create" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название курса</label>
                        <input type="text" class="form-control" id="title" name="title">
                        @error('title')
                        <div class="alert alert-danger" role="alert">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание курса</label>
                        <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Стоимость курса</label>
                        <input type="text" class="form-control" id="cost" name="cost">
                        @error('cost')
                        <div class="alert alert-danger" role="alert">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Длительность курса (в неделях)</label>
                        <input type="number" class="form-control" id="duration" name="duration">
                        @error('duration')
                        <div class="alert alert-danger" role="alert">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение курса</label>
                        <input class="form-control" type="file" id="img" name="img">
                        @error('img')
                        <div class="alert alert-danger" role="alert">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Категория курса</label>
                        <select name="category_id" class="form-select" >
                        <option  selected>Категория курса</option>
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach            
                    </select>
                    @error('category_id')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Создать курс</button>
                </form>
            
        </div>
    </section>
    <section>
      <div class="container">
        <div class="container">
          <h2 class="m-3">
              Создание категории
            </h2>
              <form method="POST" action="/category/create" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="title" class="form-label">Название категории</label>
                      <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <button type="submit" class="btn btn-primary">Создать категорию</button>
              </form>   
          </div>
      </div>
    </section>
</main>
</body>
</html>