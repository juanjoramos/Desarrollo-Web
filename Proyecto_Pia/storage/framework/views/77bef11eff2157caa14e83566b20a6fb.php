<!-- resources/views/instituciones/index.blade.php -->

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Instituciones</h2>

        <a href="<?php echo e(route('dashboard')); ?>"
            class="inline-block bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 mb-4">
            ← Volver al Menú Principal
        </a>
     <?php $__env->endSlot(); ?>

    <div class="py-12 px-6">
        <a href="<?php echo e(route('instituciones.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
            Nueva Institución
        </a>

        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 mb-4 rounded"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table class="min-w-full bg-gray-700 shadow rounded border border-gray-300 text-white">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nombre</th>
                    <th class="px-4 py-2 border">Sigla</th>
                    <th class="px-4 py-2 border">Tipo</th>
                    <th class="px-4 py-2 border">Descripción</th>
                    <th class="px-4 py-2 border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($institucion->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($institucion->nombre); ?></td>
                        <td class="border px-4 py-2"><?php echo e($institucion->sigla); ?></td>
                        <td class="border px-4 py-2"><?php echo e($institucion->tipo); ?></td>
                        <td class="border px-4 py-2"><?php echo e($institucion->descripcion ?? '-'); ?></td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="<?php echo e(route('instituciones.edit', $institucion)); ?>" class="text-blue-400 hover:underline">Editar</a>
                            <form action="<?php echo e(route('instituciones.destroy', $institucion)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('¿Eliminar esta institución?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($instituciones->isEmpty()): ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-300">No hay instituciones registradas.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\clase_aut\resources\views/instituciones/index.blade.php ENDPATH**/ ?>