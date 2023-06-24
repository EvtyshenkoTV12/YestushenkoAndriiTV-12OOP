<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <title>LovePet</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/media.css')); ?>">
    <link rel="icon" sizes="100x25" href="images/logo.png">
</head>
<body>
<div class="wrap">
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-our">
        <h2 id="our-text">
            Товар
        </h2>
        <form action="/delete_product"  method="post">
            <?php echo csrf_field(); ?>
                <div class="goods">
                    <img id="ph" src="<?php echo e(asset($product->img)); ?>" alt="Товар1">
                    <h3 id="name">
                        <?php echo e($product->title); ?>

                    </h3>
                    <p>
                        <?php echo e($product->description); ?>

                    </p>
                    <p>
                        Ціна: <?php echo e($product->price); ?> грн
                    </p>
                    <?php if($isAdminLoggined): ?>
                        <p>
                            <input type="hidden" name="prod_id" value="<?php echo e($product->id); ?>">
                            <button type="submit" class="delete_product">Видалити</button>
                        </p>
                    <?php endif; ?>
                </div>
        </form>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!-- підключення слайдера-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/good.blade.php ENDPATH**/ ?>