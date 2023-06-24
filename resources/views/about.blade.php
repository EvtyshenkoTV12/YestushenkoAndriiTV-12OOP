<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>LovePet</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="icon" sizes="100x25" href="images/logo.png">
</head>
<body>
<div class="wrap">
    @include('partials.header')
    <div class="content-our">
        <h2 id="our-text">
            ПРО НАС
        </h2>
        <div class="our-text-ph">
            <img id="pht" src="images/about_us_cat.png" height="500px" width="300px" alt="Cіамська кішечка">
            <div class="our-text">
                <p id="text">
                    Ласкаво просимо до LovePet! Ми вітаємо вас у нашому онлайн-магазині, який спеціалізується на продажу високоякісних товарів для вашого улюбленця. Ми розуміємо, що ваші домашні тварини - це частина вашої сім'ї, і саме тому ми працюємо над тим, щоб забезпечити їм найкраще можливе обслуговування.
                    У LovePet ми гордимося тим, що пропонуємо широкий асортимент товарів для всіх видів тварин, починаючи від собак і котів, і закінчуючи птахами, гризунами та рептиліями. Ми працюємо тільки з надійними виробниками, які використовують лише безпечні матеріали, тому ви можете бути впевнені, що товари, які ви купуєте у нас, є якісними і безпечними для вашого улюбленця.
                    Наша команда - це група ентузіастів тварин, які працюють з любов'ю та старанням, щоб забезпечити найкращі умови для вашого улюбленця. Ми завжди стежимо за останніми тенденціями у світі товарів для тварин і завжди прагнемо розширювати наш асортимент, щоб задовольнити всі потреби вашого улюбленця.
                    Наша мета - зробити ваше життя з твариною комфортнішим і щасливішим. Ми пропонуємо широкий вибір кормів, ласощів, іграшок, одягу та аксесуарів, щоб ви могли задовольнити всі потреби свого улюбленця на одному місці. Ми також пропонуємо корисні поради і рекомендації щодо догляду за тваринами на нашому блозі, де ви знайдете цікаву інформацію про різні пор
                </p>
            </div>
        </div>
        <div class="our-ph">
            <img src="images/about_us_cats_dogs.png" height="700px" alt="Собачка">
        </div>
    </div>
    @include('partials.footer')
</div>

<!-- підключення слайдера-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
