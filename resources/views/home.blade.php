<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/generalstyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrab-->
    <title>DNA</title>
</head>

<body>
    
    @auth
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ДНК</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Начало <span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="/tests">Тестове</a>
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
    <article class="postcard dark blue">
        <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="https://media4.giphy.com/media/k2VKaO9QITTLVxtWa1/source.gif" alt="Image Title" />
            <style>
                .postcard__img {

                    /* Задайте размер на изображението */
                    height: auto;
                    transform: rotate(90deg);

                }

                /* Опционално: Ефект при задържане на мишката */
            </style>
        </a>
        <div class="postcard__text">
            <h1 class="postcard__title blue"><a href="#">Учи по-бързо и лесно!</a></h1>
            <div class="postcard__subtitle small">
                <time datetime="2020-05-25 12:00:00">
                    <i class="fas fa-calendar-alt mr-2"></i><?php
                                                            // Задаване на текущата дата във формат ден/месец/година
                                                            echo "   " . date("d/m/Y") . "г.";
                                                            ?>
                </time>
            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">Предлагаме интерактивни уроци и ресурси, създадени да подпомогнат ученици и кандидат-студенти в постигането на техните образователни цели.</div>

        </div>
       
    </article>


   
        
    @elseguest
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ДНК</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Начало <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Теми</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contacts">Контакти</a>
      </li>
    </ul>
  </div>
   <div>
           <a href="/login"><button>Вход</button></a> 
           <a href="/registration"><button>Регистрация</button></a> 
            
        </div>
</nav>
<article class="postcard dark blue">
        <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="https://media4.giphy.com/media/k2VKaO9QITTLVxtWa1/source.gif" alt="Image Title" />
            <style>
                .postcard__img {

                    /* Задайте размер на изображението */
                    height: auto;
                    transform: rotate(90deg);

                }

                /* Опционално: Ефект при задържане на мишката */
            </style>
        </a>
        <div class="postcard__text">
            <h1 class="postcard__title blue"><a href="#">Учи по-бързо и лесно!</a></h1>
            <div class="postcard__subtitle small">
                <time datetime="2020-05-25 12:00:00">
                    <i class="fas fa-calendar-alt mr-2"></i><?php
                                                            // Задаване на текущата дата във формат ден/месец/година
                                                            echo "   " . date("d/m/Y") . "г.";
                                                            ?>
                </time>
            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">Предлагаме интерактивни уроци и ресурси, създадени да подпомогнат ученици и кандидат-студенти в постигането на техните образователни цели.</div>

        </div>
       
    </article>

     
    @endauth
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>