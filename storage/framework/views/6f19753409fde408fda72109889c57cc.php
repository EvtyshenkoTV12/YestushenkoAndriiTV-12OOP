<header>
    <div class="logo">
        <img id="logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="Лого сайту">
    </div>
    <div class="menu-navigation">
        <div class="menu-desctop">
            <span id="menu-position"><a class="color-position-1" id="menu-a" href="/">Головна</a></span>
            <span class="hov" id="menu-position"><a class="color-position-2" id="menu-a" href="/catalog">Каталог</a>
                        <div id="catol">
                            <span><a class="color-position-2" id="menu-a" href="/catalog/1" style="padding-left:10px">Для котів</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/2" style="padding-left:10px">Для собак</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/3" style="padding-left:10px">Для гризунів</a></span>
                            <span><a class="color-position-2" id="menu-a" href="/catalog/4" style="padding-left:10px">Для птахів</a></span>
                        </div>
            </span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="/about">Про нас</a></span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="/buy">Де купити?</a></span>
            <span id="menu-position"><a class="color-position-2" id="menu-a" href="<?php echo e(session()->has('user') ? '/admin': '#admin_form'); ?>" <?php echo e(session()->has('user') ? '' : 'rel=modal:open'); ?>>Адмінка</a></span>
            <?php if(session()->has('user')): ?>
                <span id="menu-position"><a class="color-position-2" id="menu-a" href="/logout">Вийти</a></span>
            <?php endif; ?>
        </div>
        <div class="menu-mobile">
            <img id="menu" src="<?php echo e(asset('images/menu.jpg')); ?>" alt="іконка меню">
            <div id="mb" class="menu-mob">
                <span id="close">&#10006;</span>
                <div class="mbli">
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/">Головна</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/catalog">Каталог</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/about">Про нас</a></span>
                    <span id="retreat"><a class="color-position-3" id="menu-a" href="/buy">Де купити?</a></span>
                    <span id="retreat"><a class="color-position-/" id="menu-a" href="<?php echo e(session()->has('user') ? '/admin': '#admin_form'); ?>" <?php echo e(session()->has('user') ? '' : 'rel=modal:open'); ?>>Адмінка</a></span>
                    <?php if(session()->has('user')): ?>
                        <span id="retreat"><a class="color-position-/" id="menu-a" href="/logout">Вийти</a></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="admin_form" class="modal">
    <form action="/login" method="post" class="admin_form">
        <?php echo csrf_field(); ?>
        <input type="text" name="login" class="login_admin" required>
        <input type="text" name="password" class="login_admin" required>
        <button type="submit" class="submit_admin">Авторизуватись</button>
    </form>
</div>
<?php /**PATH /var/www/html/resources/views/partials/header.blade.php ENDPATH**/ ?>