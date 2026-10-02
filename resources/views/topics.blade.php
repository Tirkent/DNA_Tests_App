<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/generalstyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrab-->
    <title>DNA</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">ДНК</a>
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
          Теми
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Изучавани класове</a>
          <a class="dropdown-item" href="#">Всички теми</a>
          <a class="dropdown-item" href="#">Списък с тестове</a>
          <a class="dropdown-item" href="#">Списък с термини</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Добави
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/topics">Теми</a>
          <a class="dropdown-item" href="/test">Тестове</a>
          <a class="dropdown-item" href="#">Термини</a>
        </div>
      </li>
    </ul>
  </div>
   <div>
            <form action="/logout" method="POST">
    @csrf
    <button>Отписване</button>
    </form>
            
        </div>
</nav>
</header>
<body>
<form action="/topicsadd" method="POST" enctype="multipart/form-data">
    @csrf
    <h3 class="text-center">Добави тема</h3>
    <div class="mb-3">
        <label for="title" class="form-label">Заглавие:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Брой въпроси:</label>
        <input type="number" step="0.01" class="form-control" id="number_questions" name="number_questions">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Кратко описание:</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Изображение:</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <div class="mb-3">
        <label for="text_file" class="form-label">Тема:</label>
        <input type="file" class="form-control" id="text_file" name="text_file" accept=".docx, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
    </div>
    <button type="submit" class="btn btn-success mx-auto">Добави</button>
</form>

    
</body>
</html>