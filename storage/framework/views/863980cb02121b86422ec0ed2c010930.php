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

    <!-- خلفية الصفحة كاملة -->
    <div class="min-h-screen bg-blue-50 py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- كرت المحتوى -->
            <div class="bg-white shadow-md rounded-2xl p-6">

                <!-- العنوان -->
                <h2 class="text-2xl font-bold mb-6 text-gray-800">
                    📚 Dil Öğrenme Dersleri
                </h2>

                <!-- رسالة النجاح -->
                <?php if(session('success')): ?>
                <div class="mb-4 rounded-lg bg-blue-100 border border-blue-300 text-blue-800 px-4 py-3">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>

                <!-- زر إضافة درس -->
                <div class="flex justify-end mb-4">
                    <a href="<?php echo e(route('lessons.create')); ?>"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        ➕ Yeni Ders Ekle
                    </a>
                </div>

                <!-- جدول الدروس -->
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">

                        <thead class="bg-blue-100">
                            <tr>
                                <th class="p-3 text-left text-gray-700">Başlık</th>
                                <th class="p-3 text-left text-gray-700">Açıklama</th>
                                <th class="p-3 text-left text-gray-700">Dil</th>
                                <th class="p-3 text-left text-gray-700">Seviye</th>
                                <th class="p-3 text-left text-gray-700">İşlemler</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-t hover:bg-blue-50 transition">

                                <!-- عنوان قابل للضغط -->
                                <td class="p-3 font-medium text-blue-600">
                                    <a href="<?php echo e(route('lessons.show', $lesson)); ?>" class="hover:underline">
                                        <?php echo e($lesson->title); ?>

                                    </a>
                                </td>

                                <td class="p-3 text-gray-600">
                                    <?php echo e($lesson->description); ?>

                                </td>

                                <td class="p-3">
                                    <span class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded text-sm">
                                        <?php echo e($lesson->language); ?>

                                    </span>
                                </td>

                                <td class="p-3">
                                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm">
                                        <?php echo e($lesson->level); ?>

                                    </span>
                                </td>

                                <!-- أزرار العمليات -->
                                <td class="p-3 flex flex-wrap gap-2">

                                    <a href="<?php echo e(route('lessons.edit', $lesson)); ?>"
                                        class="px-3 py-1 bg-yellow-400 text-gray-900 rounded hover:bg-yellow-500 transition font-medium">
                                        ✏️ Düzenle
                                    </a>

                                    <form action="<?php echo e(route('lessons.destroy', $lesson)); ?>"
                                          method="POST"
                                          onsubmit="return confirm('Bu dersi silmek istediğinizden emin misiniz?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition font-medium">
                                            🗑 Sil
                                        </button>
                                    </form>

                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/lessons/index.blade.php ENDPATH**/ ?>