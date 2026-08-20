

<?php $__env->startSection('titulo', 'FERROVA - Ferretería'); ?>

<?php $__env->startSection('content'); ?>

    <section id="contacto">

        <h2>Contáctanos</h2>

        <p>
            ¿Tienes alguna consulta sobre nuestros productos o necesitas una cotización?
            Completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.
        </p>

        <form id="form-contacto" novalidate method="post" action="<?php echo e(route('contacto.store')); ?>">
            <?php echo csrf_field(); ?>

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?php echo e(old('nombre')); ?>" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" value="<?php echo e(old('correo')); ?>" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su teléfono" value="<?php echo e(old('telefono')); ?>">

            <label for="asunto">Asunto:</label>
            <select id="asunto" name="asunto">
                <option value="">Seleccione una opción</option>
                <option value="Cotizacion" <?php if(old('asunto') === 'Cotizacion'): echo 'selected'; endif; ?>>Solicitar cotización</option>
                <option value="Consulta" <?php if(old('asunto') === 'Consulta'): echo 'selected'; endif; ?>>Consulta sobre productos</option>
                <option value="Pedido" <?php if(old('asunto') === 'Pedido'): echo 'selected'; endif; ?>>Realizar un pedido</option>
                <option value="Otro" <?php if(old('asunto') === 'Otro'): echo 'selected'; endif; ?>>Otro</option>
            </select>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje..." required><?php echo e(old('mensaje')); ?></textarea>

            <button type="submit">Enviar consulta</button>

            <?php if($errors->any()): ?>
                <p id="aviso-contacto" class="aviso error">
                    <?php echo e($errors->first()); ?>

                </p>
            <?php elseif(session('exito')): ?>
                <p id="aviso-contacto" class="aviso exito">
                    <?php echo e(session('exito')); ?>

                </p>
            <?php else: ?>
                <p id="aviso-contacto" class="aviso"></p>
            <?php endif; ?>

        </form>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/contacto.blade.php ENDPATH**/ ?>