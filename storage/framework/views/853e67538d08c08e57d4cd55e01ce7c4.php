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
    <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        <div class="bg-white shadow-lg rounded-xl p-8">

            <!-- عنوان الدرس -->
            <h1 class="text-3xl font-bold mb-4 text-gray-800">
                <?php echo e($lesson->title); ?>

            </h1>

            <!-- وصف الدرس -->
            <p class="text-gray-600 mb-6 leading-relaxed">
                <?php echo e($lesson->description); ?>

            </p>

            <!-- اللغة + المستوى -->
            <div class="flex flex-wrap gap-4 mb-8">
                <span class="px-4 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-semibold">
                   <?php echo e($lesson->language); ?>

                </span>

                <span class="px-4 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                    <?php echo e($lesson->level); ?>

                </span>
            </div>

            <!-- الأزرار -->
            <div class="flex flex-wrap gap-3">

                <!-- زر الرجوع -->
                <a href="<?php echo e(route('lessons.index')); ?>"
                   class="px-5 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition font-medium">
                    ← Geri Dön
                </a>

                <!-- زر التعديل -->
                <a href="<?php echo e(route('lessons.edit', $lesson)); ?>"
                   class="px-5 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500 transition font-medium">
                    ✏️ Düzenle
                </a>

                <!-- زر الحذف -->
                <form action="<?php echo e(route('lessons.destroy', $lesson)); ?>"
                      method="POST"
                      onsubmit="return confirm('Bu dersi silmek istediğinizden emin misiniz?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit"
                            class="px-5 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition font-medium">
                        🗑 Sil
                    </button>
                </form>

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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/lessons/show.blade.php ENDPATH**/ ?>