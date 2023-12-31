<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Курсы и точка</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Курсы</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/">Записаться</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/personal">Личный кабинет</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signout">Выход</a>
              </li>
              @endauth
            </ul>
            @guest
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/registration">Регистрация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/authorization">Войти</a>
              </li>
            </ul>
            @endguest
          </div>
        </div>
      </nav>
</div>