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
    <div class="p-10 text-center">
        <h1 class="text-3xl font-bold text-green-700 mb-4">🌍 قسم المجتمع</h1>

        <p class="text-gray-600 mb-6">انضم لمجتمع المتعلمين وشارك تقدمك وخبراتك.</p>

        <div class="grid md:grid-cols-2 gap-6">

            <a href="#" class="block p-6 bg-white shadow rounded-xl border hover:bg-green-50 transition">
                <h2 class="text-xl font-semibold mb-2">💬 المناقشات</h2>
                <p class="text-gray-500">شارك آراءك وتعرف على متعلمين آخرين.</p>
            </a>

            <a href="#" class="block p-6 bg-white shadow rounded-xl border hover:bg-green-50 transition">
                <h2 class="text-xl font-semibold mb-2">📸 مشاركة الإنجازات</h2>
                <p class="text-gray-500">انشر تقدمك وشجع غيرك.</p>
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
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/sections/community.blade.php ENDPATH**/ ?>