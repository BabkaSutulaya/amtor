<?php
require "session.php";
var_dump($_SESSION["id"]);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="light.css" id="theme-link">
  <link rel="stylesheet" href="slider.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Amtor</title>
</head>

<body>
  <header>
    <nav>
      <ul class="ul_nav">
        <li class="nav_li"><a href="index.php"><img class="img_logo" src="img/logotype.png" width="132" alt="logotype"></a></li>
        <li class="nav_li"><a href="aboutcompany.php">О компании</a></li>
        <li class="nav_li"><a href="catalog.php">Каталог</a></li>
        <li class="nav_li"><a href="promotions.php">Акции и предложения</a></li>
        <li class="nav_li"><a href="subscription.php">Подписка</a></li>
        <li class="nav_li"><a href="contacts.php">Контакты</a></li>
        <li class="nav_li">
          <form>
            <input type="text" placeholder="  поиск">
            <button class="button_search" type="submit"></button>
          </form>
        </li>
        <li class="nav_li"><a href="account_2.php"><img class="img_account" src="img/user.png" width="48" alt="account"></a></li>
      </ul>
    </nav>
    <div class="theme-button" id="theme-button">
      <img class="img_lightdark" src="img/lightdark.png" width="35" height="35" alt="lightdark">
    </div>
  </header>
  <main>
    <div class="div_banner">
      <img class="img_banner" src="img/banner.png" alt="banner">
      <button onclick="window.location.href = 'subscription.php';" class="btn">Получить</button>
    </div>
    <div class="heading">
      <h1>Новинка</h1>
      <a href="https://yandex.ru/"><img class="img_arrow" src="img/arrow.png" width="20" height="20" alt="arrow"></a>
    </div>
    <ul class="movie">
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar1.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar2.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar3.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar4.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar5.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
    </ul>

    <div class="heading">
      <h1>Каталог</h1>
      <a href="catalog.html"><img class="img_arrow" src="img/arrow.png" width="20" height="20" alt="arrow"></a>
    </div>
    <ul class="movie">
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar1.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/podcast2.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Нулевой пациент</a></h3>
            <span class="description">Подкаст Кинопоиска с обсуждением сериала «Нулевой пациент»</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar3.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/tovar5.png" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">Коати. Легенда джунглей</a></h3>
            <span class="description">2021, мультфильм</span>
          </div>
        </div>
      </li>
    </ul>

    <section id="slider_bl">
      <div class="wrapper">
        <input checked type=radio name="slider" id="slide1" />
        <input type=radio name="slider" id="slide2" />
        <input type=radio name="slider" id="slide3" />
        <input type=radio name="slider" id="slide4" />
        <div class="slider-wrapper">
          <div class=inner>
            <article>
              <img src="img/slider1.jpg" alt="slider1">
            </article>
            <article>
              <img src="img/slider2.jpg" alt="slider2">
            </article>
            <article>
              <img src="img/slider3.jpg" alt="slider3">
            </article>
            <article>
              <img src="img/slider4.jpg" alt="slider4">
            </article>
          </div>
        </div>
        <div class="slider-prev-next-control">
          <label for=slide1></label>
          <label for=slide2></label>
          <label for=slide3></label>
          <label for=slide4></label>
        </div>
        <div class="slider-dot-control">
          <label for=slide1></label>
          <label for=slide2></label>
          <label for=slide3></label>
          <label for=slide4></label>
        </div>
      </div>
    </section>

    <div class="heading">
      <h1>Что сейчас слушают</h1>
      <a href="https://yandex.ru/"><img class="img_arrow" src="img/arrow.png" width="20" height="20" alt="arrow"></a>
    </div>
    <ul class="movie">
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/audiobook1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">S.T.A.L.K.E.R. Врата</a></h3>
            <span class="description">2022, фэнтези</span>
          </div>
        </div>
      </li>
    </ul>

    <div class="heading">
      <h1>Фильмы про любовь</h1>
      <a href="https://yandex.ru/"><img class="img_arrow" src="img/arrow.png" width="20" height="20" alt="arrow"></a>
    </div>
    <ul class="movie">
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/love1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">В джазе только девушки</a></h3>
            <span class="description">1959, мелодрама</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/love1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">В джазе только девушки</a></h3>
            <span class="description">1959, мелодрама</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/love1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">В джазе только девушки</a></h3>
            <span class="description">1959, мелодрама</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/love1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">В джазе только девушки</a></h3>
            <span class="description">1959, мелодрама</span>
          </div>
        </div>
      </li>
      <li class="movie_li">
        <div class="movie-item">
          <img src="img/love1.jpg" alt="product">
          <div class="product-list">
            <h3><a href="https://yandex.ru/">В джазе только девушки</a></h3>
            <span class="description">1959, мелодрама</span>
          </div>
        </div>
      </li>
    </ul>
  </main>
  <footer>
    <ul class="ul_footer">
      <li class="li_footer"><a href="aboutcompany.php">О компании</a></li>
      <li class="li_footer"><a href="catalog.php">Каталог</a></li>
      <li class="li_footer"><a href="promotions.php">Акции и предложения</a></li>
      <li class="li_footer"><a href="subscription.php">Подписка</a></li>
      <li class="li_footer"><a href="contacts.php">Контакты</a></li>
    </ul>

    <div class="contacts">
      <ul class="ul_contacts">
        <li class="li_contacts"><img src="img/telephone.png" width="25" height="25" alt="telephone">
          +7(977)575-04-19</li>
        <li class="li_contacts"><img src="img/email.png" width="25" height="25" alt="email">
          Amtor@yandex.ru</li>
        <li class="li_contacts"><img src="img/location.png" width="25" height="25" alt="location">
          Москва, ул. Пушкина 21, 1 этаж, офис 41</li>
      </ul>
    </div>
    <div class="social_div">
      <p>Мы в соц. сетях!</p>
      <ul class="social">
        <li class="social_li"><a href="https://yandex.ru/"><img src="img/telegram.png" width="40" alt="telegram"></a></li>
        <li class="social_li"><a href="https://yandex.ru/"><img src="img/youtube.png" width="40" alt="youtube"></a></li>
        <li class="social_li"><a href="https://yandex.ru/"><img src="img/twitter.png" width="40" alt="twitter"></a></li>
        <li class="social_li"><a href="https://yandex.ru/"><img src="img/vk-logo-of-social-network.png" width="40" alt="vk"></a></li>
      </ul>
    </div>
    <p class="copyright">© 2022 Amtor </p>
  </footer>
  <script src="script.js"></script>
</body>

</html>