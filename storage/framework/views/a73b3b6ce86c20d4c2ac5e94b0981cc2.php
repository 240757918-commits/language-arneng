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
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">

                <h2 class="text-2xl font-bold mb-6">✏️ Ders Düzenle</h2>

                <form method="POST" action="<?php echo e(route('lessons.update', $lesson)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <!-- Başlık -->
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Başlık</label>
                        <input type="text" name="title"
                               value="<?php echo e(old('title', $lesson->title)); ?>"
                               class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
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
                        <label class="block font-semibold mb-1">Açıklama</label>
                        <textarea name="description"
                                  class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                                  rows="4"><?php echo e(old('description', $lesson->description)); ?></textarea>
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
                        <label class="block font-semibold mb-1">Dil</label>
                        <select name="language"
                                class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                            <option value="ar" <?php echo e($lesson->language=='ar'?'selected':''); ?>>Arapça</option>
                            <option value="tr" <?php echo e($lesson->language=='tr'?'selected':''); ?>>Türkçe</option>
                            <option value="en" <?php echo e($lesson->language=='en'?'selected':''); ?>>İngilizce</option>
                        </select>
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
                        <label class="block font-semibold mb-1">Seviye</label>
                        <select name="level"
                                class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                            <option value="beginner" <?php echo e($lesson->level=='beginner'?'selected':''); ?>>Beginner</option>
                            <option value="intermediate" <?php echo e($lesson->level=='intermediate'?'selected':''); ?>>Intermediate</option>
                            <option value="advanced" <?php echo e($lesson->level=='advanced'?'selected':''); ?>>Advanced</option>
                        </select>
                        <?php $__errorArgs = ['level'];
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

                    <!-- Kaydet Butonu -->
                    <button type="submit"
                            class="w-full sm:w-auto bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition-colors">
                        💾 Değişiklikleri Kaydet
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\nmolearn\learnify\resources\views/lessons/edit.blade.php ENDPATH**/ ?>