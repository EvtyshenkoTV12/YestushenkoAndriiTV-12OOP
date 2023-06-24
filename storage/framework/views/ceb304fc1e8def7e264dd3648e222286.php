<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
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
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-our">
        <h2 id="our-text">
            Як придбати нашу продукцію
        </h2>
        <div class="our-text-ph">
            <div class="our-text">
                <p id="text">
                    Дякуємо за ваш інтерес до LovePet - вашого надійного джерела товарів для тварин. Ми пропонуємо широкий вибір продуктів для вашого улюбленця, незалежно від його розміру, породи або виду. Наша команда працює наполегливо, щоб забезпечити вам найкращі товари та задовольнити всі ваші потреби.
                    Ознайомтесь зі способами, які ми пропонуємо для зручного придбання товарів:
                    <br><br>
                        Відвідайте наші магазини: LovePet має багато фізичних магазинів, розташованих у різних містах.
                    Ви можете завітати до найближчого магазину та вибрати необхідні товари особисто. Наші працівники з радістю допоможуть вам знайти все необхідне для вашого улюбленця.
                    <br><br>
                        Онлайн-замовлення: Якщо ви віддалені від наших магазинів або просто бажаєте замовити товар зручним способом, ви можете скористатися нашим онлайн-магазином. Просто перегляньте наш широкий асортимент товарів на нашому вебсайті, оберіть потрібні вам продукти та додайте їх до кошика. Після завершення вибору, перейдіть до оформлення замовлення, вказавши необхідну інформацію про доставку та спосіб оплати. Ми докладемо всіх зусиль, щоб ваші товари були доставлені безпечно й оперативно.
                    Доставка новою поштою та Укрпоштою: Ми пропонуємо два зручних способи доставки вашого замовлення. Ви можете обрати доставку через службу "Нова пошта" або скористатися послугами "Укрпошти". Обидва варіанти забезпечують надійну та швидку доставку по всій території України. Після оформлення замовлення ми надішлемо вам підтвердження замовлення, яке включатиме всю необхідну інформацію про доставку. Ви зможете відстежувати стан свого замовлення за допомогою наданого трекінг-номера.
                    <br><br>
                    Наша команда служби підтримки завжди готова допомогти вам у разі будь-яких запитань або проблем замовлення. Ви можете зв'язатися з нами за допомогою контактної інформації, яка вказана на нашому вебсайті. Наші співробітники докладуть максимум зусиль, щоб забезпечити вам приємне та безпроблемне покупкове досвід.
                    LovePet прагне забезпечити якість товарів та задоволення наших клієнтів. Ми працюємо тільки з надійними постачальниками і гарантуємо якість кожного продукту, який ми продаємо.
                    Дякуємо, що обрали LovePet для потреб вашого улюбленця. Ми впевнені, що ви будете задоволені нашими товари та обслуговуванням. Робота з нами - це крок до щасливого та здорового життя вашого улюбленця!<br>

                </p>
            </div>
            <div class="our-ph">
                <img id="ph-buy" src="images/dog_how_to_buy.avif" alt="Фото лікарів" height="350px">
                <a id="s-phone" href="tel: +38099999">Зателефонувати</a>
            </div>
        </div>
        <div style="height:200px;"></div>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!-- підключення слайдера-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/buy.blade.php ENDPATH**/ ?>