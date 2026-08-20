

<?php $__env->startSection('titulo', 'FERROVA - Ferretería'); ?>

<?php $__env->startSection('content'); ?>

    <section id="productos">

        <div class="encabezado-productos">

            <h2>Nuestros productos</h2>

            <a href="<?php echo e(route('productos.create')); ?>" class="btn-agregar">+ Agregar producto</a>

        </div>

        <div class="productos-grid">

            <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <article class="producto-card">

                    <div class="producto-info">

                        <h3><?php echo e($producto->nombre); ?></h3>

                        <p class="categoria"><?php echo e($producto->categoria); ?></p>
                        <p class="precio">Bs. <?php echo e(number_format($producto->precio, 2)); ?></p>
                        <p class="stock">Stock: <?php echo e($producto->stock); ?></p>

                    </div>

                </article>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <p class="sin-productos">No hay productos disponibles en este momento.</p>

            <?php endif; ?>

        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/productos.blade.php ENDPATH**/ ?>