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
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">➕ Yeni Ders Ekle</h2>

                <!-- Başarılı kayıt mesajı -->
                <?php if(session('success')): ?>
                    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <!-- Ders ekleme formu -->
                <form method="POST" action="<?php echo e(route('lessons.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <!-- Başlık -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Ders Başlığı:</label>
                        <input type="text" name="title" value="<?php echo e(old('title')); ?>"
                               class="w-full border rounded-lg p-2" required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Açıklama -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Ders Açıklaması:</label>
                        <textarea name="description" rows="4" class="w-full border rounded-lg p-2" required><?php echo e(old('description')); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Dil -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Dil:</label>
                        <input type="text" name="language" value="<?php echo e(old('language')); ?>"
                               class="w-full border rounded-lg p-2" placeholder="örnek: İngilizce veya Arapça" required>
                        <?php $__errorArgs = ['language'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Seviye -->
                    <div class="mb-6">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Seviye:</label>
                        <select name="level" class="w-full border rounded-lg p-2">
                            <option value="Beginner">Başlangıç</option>
                            <option value="Intermediate">Orta</option>
                            <option value="Advanced">İleri</option>
                        </select>
                    </div>

                    <!-- Kaydet butonu -->
                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            💾 Kaydet
                        </button>
                    </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/lessons/create.blade.php ENDPATH**/ ?>