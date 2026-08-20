

<?php $__env->startSection('titulo', 'Iniciar sesión - FERROVA'); ?>

<?php $__env->startSection('content'); ?>

<section class="login-container">

    <div class="login-card">

        <h2>Iniciar sesión</h2>

        <p>Acceso exclusivo para el administrador de FERROVA.</p>

        <?php if($errors->any()): ?>
            <div class="errores">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="campo">
                <label for="email">Correo electrónico</label>

                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>

                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Iniciar sesión</button>

        </form>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/login.blade.php ENDPATH**/ ?>