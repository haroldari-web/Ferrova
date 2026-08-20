

<?php $__env->startSection('titulo', 'Agregar producto - FERROVA'); ?>

<?php $__env->startSection('content'); ?>

<section id="agregar-producto">

    <h2>Agregar nuevo producto</h2>

    <p class="descripcion">Registra un nuevo producto disponible en FERROVA.</p>

    <?php if($errors->any()): ?>
        <div class="errores">
            <strong>Advertencia:</strong>

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('productos.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="campo">
            <label for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="Ingrese el nombre del producto" required>
        </div>

        <div class="campo">
            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria" required>
                <option value="">Seleccione una categoría</option>
                <option value="Herramientas" <?php echo e(old('categoria') == 'Herramientas' ? 'selected' : ''); ?>>Herramientas</option>
                <option value="Herramientas eléctricas" <?php echo e(old('categoria') == 'Herramientas eléctricas' ? 'selected' : ''); ?>>Herramientas eléctricas</option>
                <option value="Construcción" <?php echo e(old('categoria') == 'Construcción' ? 'selected' : ''); ?>>Construcción</option>
                <option value="Pinturas" <?php echo e(old('categoria') == 'Pinturas' ? 'selected' : ''); ?>>Pinturas</option>
                <option value="Plomería" <?php echo e(old('categoria') == 'Plomería' ? 'selected' : ''); ?>>Plomería</option>
                <option value="Material eléctrico" <?php echo e(old('categoria') == 'Material eléctrico' ? 'selected' : ''); ?>>Material eléctrico</option>
                <option value="Fijaciones" <?php echo e(old('categoria') == 'Fijaciones' ? 'selected' : ''); ?>>Fijaciones</option>
            </select>
        </div>

        <div class="campo">
            <label for="precio">Precio (Bs.)</label>
            <input type="number" id="precio" name="precio" value="<?php echo e(old('precio')); ?>" placeholder="Ingrese el precio" min="0" step="0.01" required>
        </div>

        <div class="campo">
            <label for="stock">Cantidad en stock</label>
            <input type="number" id="stock" name="stock" value="<?php echo e(old('stock')); ?>" placeholder="Ingrese la cantidad" min="0" >
        </div>

        <div class="acciones">
            <button type="submit" class="btn-guardar">Guardar producto</button>
            <a href="<?php echo e(route('productos')); ?>" class="btn-cancelar">Cancelar</a>
        </div>

    </form>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/productos-crear.blade.php ENDPATH**/ ?>