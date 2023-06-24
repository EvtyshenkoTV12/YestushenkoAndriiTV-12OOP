<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>LovePet</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" sizes="100x25" href="images/logo.png">
</head>
<body>
<div class="wrap">
    @include('partials.header')
    <div class="content">
        <div class="description">
            <h1 id="description-title">Найкращі товари для найкращих улюбленців!</h1>
            <h3 id="description-title-2">Смаколики та іграшки</h3>

            <div class="card-goods-description">
                <div class="card">
                    <img src="images/main-food.png" height="150px" alt="Корм">
                    <p id="card-text">
                        Смаколики
                    </p>
                </div>
                <div class="card">
                    <img src="images/main-cats.png" height="150px"  alt="Іграшки">
                    <p id="card-text">
                        Іграшки
                    </p>
                </div>
                <div class="card">
                    <img src="images/main-pet.png" height="150px" alt="Ліки">
                    <p id="card-text">
                        Ліки
                    </p>
                </div>
            </div>
            <p id="description-goods">Ми пропонуємо широкий вибір товарів,
                які задовольнять його потреби. Від смачного харчування до розважальних іграшок та необхідних ліків
            </p>
            <a id="color-a" href="/catalog"><p id="btn-goods">До каталогу</p></a>
        </div>
        <div class="goods-categori">
            <p id="categori-goods-title">Категорії товарів: </p>
            <div class="categori-goods">
                <div class="goods-clean">
                    <img id="ph" src="images/cat-food.png">
                    <p>
                        <br><span id="goods-categori-name">Для котів</span>
                    </p>
                    <a id="color-a" href="/catalog/1"><p id="btn-goods">До каталогу</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/dog-toy.png">
                    <p>
                        <br><span id="goods-categori-name">Для собак</span>
                    </p>
                    <a id="color-a" href="/catalog/2"><p id="btn-goods">До каталогу</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/main-parrot-toy.jpg">
                    <p>
                        <br><span id="goods-categori-name">Для птахів</span>
                    </p>
                    <a id="color-a" href="/catalog/4"><p id="btn-goods">До каталогу</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/drug-rabbit.jpeg">
                    <p>
                        <br><span id="goods-categori-name">Для гризунів</span>
                    </p>
                    <a id="color-a" href="/catalog/3"><p id="btn-goods">До каталогу</p></a>
                </div>
            </div>
        </div>
        <div class="out-unix">
            <div class="text-out-unix">
                <h2 id="text-out-unix-1">
                    Наша унікальність:
                </h2>
                <p id="text-out-unix-2">
                    Команда LovePet ділиться глибокою любов'ю до тварин.
                    Все почалося, коли група запалених осіб, включаючи ветеринарів,
                    любителів тварин та захисників прав тварин, об'єдналися з однією
                    спільною метою. Їх присвяченість наданню найкращих товарів та догляду
                    за тваринами призвела до створення LovePet, де їх колективний досвід та
                    співчуття гармонійно поєднуються, щоб задовольнити потреби улюбленців та їх власників.
                </p>
            </div>
            <div class="photo-our-unix">
                <div class="ph-ou-ui">
                    <img id="phot" src="images/our1.jpg" alt="Фото руки з якої росте листок">
                    <p id="ph-ou-ui">
                        Виключно натуральні компоненти
                    </p>
                </div>
                <div class="ph-ou-ui">
                    <img id="phot" src="images/our2.jpg" alt="Фото руки з якої росте листок">
                    <p id="ph-ou-ui">
                        Абсолютно безпечний склад усіх засобів
                    </p>
                </div>
            </div>
        </div>
        <div class="out-unix">
            <div class="text-out-unix">
                <h2 id="text-out-unix-1">
                    Турбота про вашого улюбленця
                </h2>
                <p id="text-out-unix-2">
                    У нашому магазині ми пильно стежимо за всіма аспектами, пов'язаними з безпекою та добробутом тварин. Ми розуміємо, що ваші улюбленці - це члени вашої родини, і ми прикладаємо всі зусилля, щоб забезпечити їхню безпеку та здоров'я.<br><br>
                    Перш за все, ми працюємо тільки з відомими та довіреними постачальниками, які гарантують якість своїх продуктів. Ми ретельно перевіряємо кожен товар на відповідність стандартам безпеки та якості перед тим, як він потрапить на полиці нашого магазину. Ви можете бути впевнені, що купуючи від нас, ви отримуєте лише найкращі товари для свого улюбленця.<br><br>
                    Наші співробітники - це досвідчені фахівці, які мають глибокі знання про різні види тварин і їхні потреби. Вони завжди готові надати вам індивідуальну консультацію та поради щодо правильного вибору товарів для вашого улюбленця. Ми знаємо, що кожна тварина унікальна, тому ми докладаємо всіх зусиль, щоб допомогти вам знайти саме те, що підходить вашому улюбленцю найкраще.<br><br>
                    Наші приміщення обладнані з урахуванням безпеки тварин. Ми піклуємося про те, щоб усі товари були розташовані в безпечному для тварин місці. Ми також регулярно проводимо прибирання та дезінфекцію, щоб забезпечити чистоту та гігієну. Наші полиці завжди заповнені свіжими та безпечними товарами, готовими задовольнити потреби вашого улюбленця. <br><br>
                </p>
            </div>
            <div class="photo-our-uni">
                <div class="wrap5" width="400px" height="600px">
                    <div class="fotorama">
                        <img src="images/inde_car_1.png">
                        <img src="images/inde_car_2.png">
                        <img src="images/inde_car_3.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="care">
            <div class="care-photo">
                <img id="care-photo" src="images/pets-index.avif" alt="фото тварин">
            </div>
            <div class="care-text">
                <h2 id="care-text-1">
                    Турбота про здоров'я й добробут тварин об'єднує багато людей з усього світу.
                </h2>
                <p id="care-text-2">
                    Як власники тварин, ми розуміємо важливість якісної їжі та іграшок для домашніх улюбленців.
                    Якісна їжа забезпечує їм всі необхідні поживні речовини, підтримує здоров'я та енергію.
                    Іграшки стимулюють фізичну активність, розвивають інтелект та зменшують стрес.
                    Завітайте до нашого магазину, де ми пропонуємо широкий вибір якісної їжі та захоплюючих іграшок для щасливого та здорового життя вашого улюбленця.
                </p>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>

<!-- підключення слайдера-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="js/script.js"></script>
</body>
</html>
