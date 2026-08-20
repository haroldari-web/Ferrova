

<?php $__env->startSection('titulo', 'Panel de administración - FERROVA'); ?>

<?php $__env->startSection('content'); ?>

<section id="panel">

    <div class="panel-header">

        <div>
            <h2>Panel de administración</h2>

            <p>Solicitudes recibidas mediante el formulario de contacto.</p>
        </div>

        <div class="administrador">
            Administrador:
            <strong><?php echo e(Auth::user()->name); ?></strong>
        </div>

    </div>


    <div class="tabla-contenedor">

        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>
                        <td><?php echo e($solicitud->nombre); ?></td>
                        <td><?php echo e($solicitud->correo); ?></td>
                        <td><?php echo e($solicitud->telefono); ?></td>
                        <td><?php echo e($solicitud->asunto); ?></td>
                        <td class="mensaje"><?php echo e($solicitud->mensaje); ?></td>
                        <td><?php echo e($solicitud->fecha); ?></td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="7" class="sin-solicitudes">No se han recibido solicitudes.</td>

                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ferrova Laravel\resources\views/panel.blade.php ENDPATH**/ ?>