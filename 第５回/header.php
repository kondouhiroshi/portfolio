<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="header_content">            
            <a class="logo" href="./index.php">
                <img src="img/logo.png"   alt="">
            </a>
            <ul>
                <li>
                    <a href="index.php#service">スケジュール</a>
                </li>
                <li>
                    <a href="index.php#access"id="access_header">アクセス</a>
                </li>
                <li>
                    <a href="index.php#contact">席予約</a>
                </li>
            </ul>
            <button class="hamburger-menu" id="js-hamburger-menu">
                <span class="hamburger-menu__bar"></span>
                <span class="hamburger-menu__bar"></span>
                <span class="hamburger-menu__bar"></span>
              </button>
        </div>

<nav class="navigation">
            <ul class="navigation__list">
              <li class="navigation__list-item"><a href="index.php#service" class="navigation__link">スケジュール</a></li>
              <li class="navigation__list-item"><a href="index.php#access" class="navigation__link">アクセス</a></li>
              <li class="navigation__list-item"><a href="index.php#contact" class="navigation__link">予約</a></li>
             
            </ul>
          </nav>
</header>  
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="./js/header.js"></script>

</body>
</html>