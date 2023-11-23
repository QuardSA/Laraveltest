<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>
        <x-header />
        <style>
            .hero {
                height: 75vh;
                width: 100%;
                overflow: hidden;
                background-image: url('storage/images/e6dc890d-0bd1-43a7-898f-f59843e85df1.jfif');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 20%;

            }
        </style>

        <section id="hero" class="hero d-flex justify-content-center align-items-center text-white ">
            <h1 class="bg-dark p-1 opacity-75">Онлайн курсы - это круто!</h1>
        </section>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container"> <a href="/category/{{ 1 }}">PHP</a>
            <a href="/category/{{ 2 }}">JS</a>
            <a href="/category/{{ 3 }}">CSS</a>
        </div>

        <section id="courses">
            <div class="container py-4">
                <h2 class="m-3">Наши Курсы</h2>
                <div class="d-flex">
                    @forelse($courses as $item)
                        <div class="card" style="width: 18rem;">
                            <img src="storage/images/{{ $item->img }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text">Продолжительность курса
                                    <b>{{ $item->duration }}</b>
                                </p>
                                <p class="card-text">Стоимость
                                    <b>{{ $item->cost }}</b>
                                </p>
                            </div>
                        </div>
                    @empty
                        <p>нету курсов больше</p>
                    @endforelse
                </div>
                {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </section>
        {{ session()->get('alert') }}




        <section id="enroll">
            <div class="container">
                <form method="POST" action="/enroll">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Ваш email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Выберите курс</label>
                        <select class="form-select" name="course">
                            @foreach ($courses as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Оставить заявку</button>
                </form>
            </div>

        </section>
    </main>


</body>

</html>
