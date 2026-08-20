<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('titulo', 'FERROVA - Ferretería'); ?></title>

    <link rel="icon" type="image/png" href="<?php echo e(asset('imgs/Icono.png')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <header>

        <h1>FERROVA</h1>
        <p>Tu ferretería de confianza</p>
        <button type="button" id="btn-tema" class="btn-modo">☀️ Modo Día</button>

    </header>

    <nav>

        <button type="button" id="btn-menu" class="hamburguesa"><i class="fa-solid fa-bars"></i> Menú</button>

        <ul>
            <li><a href="<?php echo e(url('/')); ?>"><i class="fa-solid fa-house"></i> Inicio</a></li>
            <li><a href="<?php echo e(url('/productos')); ?>"><i class="fa-solid fa-cart-shopping"></i> Productos</a></li>
            <li><a href="<?php echo e(url('/contacto')); ?>"><i class="fa-solid fa-envelope"></i> Contacto</a></li>
            <?php if(auth()->guard()->check()): ?>
            <li><a href="<?php echo e(route('panel')); ?>"><i class="fa-solid fa-table-columns"></i> Panel</a></li>
            <li><form action="<?php echo e(route('logout')); ?>" method="POST"><?php echo csrf_field(); ?><button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</button></form></li>
            <?php else: ?>
            <li><a href="<?php echo e(route('login')); ?>"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</a></li>
            <?php endif; ?>
        </ul>

    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>

        <p>&copy; <?php echo e(date('Y')); ?> FERROVA - Todos los derechos reservados.</p>
        <p>Desarrollado por Harold Rodrigo Ari Escobar.</p>

    </footer>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/layout.blade.php ENDPATH**/ ?>