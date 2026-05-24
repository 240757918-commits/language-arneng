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
    <div class="p-8 bg-gray-50 min-h-screen">

        <!-- 🌐 أزرار اختيار اللغة -->
        <div class="flex justify-end mb-6 space-x-2">
            <a href="<?php echo e(url('/set-language/ar')); ?>" class="px-3 py-1 rounded bg-indigo-100 hover:bg-indigo-200">🇸🇦 عربي</a>
            <a href="<?php echo e(url('/set-language/tr')); ?>" class="px-3 py-1 rounded bg-indigo-100 hover:bg-indigo-200">🇹🇷 Türkçe</a>
            <a href="<?php echo e(url('/set-language/en')); ?>" class="px-3 py-1 rounded bg-indigo-100 hover:bg-indigo-200">🇬🇧 English</a>
        </div>

        <!-- 🏷 العنوان والنص -->
        <h1 class="text-3xl font-bold mb-6 text-indigo-700">
            <?php echo e($t['welcome']); ?>

        </h1>

        <p class="mb-8 text-gray-600">
            <?php echo e($t['choose']); ?>

        </p>

        <!-- 🖼 الصورة الرئيسية -->
        <div class="flex justify-center mb-10">
            <img src="<?php echo e(asset('images/learnify-banner.png')); ?>"
                 alt="Learnify Banner"
                 class="w-1/3 md:w-1/4 rounded-2xl shadow-lg object-cover">
        </div>

        <!-- 📦 الأقسام -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- 📚 تعلم اللغات -->
            <a href="<?php echo e(route('lessons.index')); ?>"
               class="block p-6 bg-white rounded-2xl shadow hover:bg-indigo-50 transition">
                <span class="font-semibold"><?php echo e($t['lang_section']); ?></span>
                <p class="text-sm text-gray-500 mt-2"><?php echo e($t['lang_desc']); ?></p>
            </a>

            <!-- 🧠 الدعم النفسي -->
            <a href="<?php echo e(route('support')); ?>"
               class="block p-6 bg-white rounded-2xl shadow hover:bg-indigo-50 transition">
                <span class="font-semibold"><?php echo e($t['support_section']); ?></span>
                <p class="text-sm text-gray-500 mt-2"><?php echo e($t['support_desc']); ?></p>
            </a>

            <!-- 🎨 الإبداع -->
            <a href="<?php echo e(route('creativity')); ?>"
               class="block p-6 bg-white rounded-2xl shadow hover:bg-indigo-50 transition">
                <span class="font-semibold"><?php echo e($t['creativity_section']); ?></span>
                <p class="text-sm text-gray-500 mt-2"><?php echo e($t['creativity_desc']); ?></p>
            </a>

            <!-- 🚀 التحفيز -->
            <a href="<?php echo e(route('motivation')); ?>"
               class="block p-6 bg-white rounded-2xl shadow hover:bg-indigo-50 transition">
                <span class="font-semibold"><?php echo e($t['motivation_section']); ?></span>
                <p class="text-sm text-gray-500 mt-2"><?php echo e($t['motivation_desc']); ?></p>
            </a>

            <!-- 👥 المجتمع -->
            <a href="<?php echo e(route('community')); ?>"
               class="block p-6 bg-white rounded-2xl shadow hover:bg-indigo-50 transition">
                <span class="font-semibold"><?php echo e($t['community_section']); ?></span>
                <p class="text-sm text-gray-500 mt-2"><?php echo e($t['community_desc']); ?></p>
            </a>

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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/dashboard.blade.php ENDPATH**/ ?>