<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/generalstyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrab-->
    <title>DNA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ДНК</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Начало <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Теми</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contacts">Контакти</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
   
</nav>
          <form action="/register" method="POST">
        @csrf
        <div>
            <h2>Регистрация</h2>
            <label for="name">Три имена</label>
            <input name="name" type="text" placeholder="Въведете три имена:">
            <label for="username">Потребителско име</label>
            <input name="username" type="text" placeholder="Въведете потребителско име:">
            <label for="email">Имейл</label>
            <input name="email" type="text" placeholder="Въведете имейл адрес:">
            <label for="password">Парола</label>
            <input name="password" type="password" placeholder="Измислите силна парола:">
            <label for="repeatpassword">Повтори парола</label>
            <input name="repeatpassword" type="Password" placeholder="Повторете паролата си:">
            <div>
                <input name="radiobutton1" type="radio">
                <label for="radiobutton1">Ученик</label>
                <input name="radiobutton2" type="radio">
                <label for="radiobutton2">Администратор</label>
            </div>
            <button>Регистрирай се</button>
        </div>
        </form> 
</body>
</html>