<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;

/*
|--------------------------------------------------------------------------
| الصفحة الرئيسية (Welcome)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $lang = session('lang', 'ar');

    $translations = [
        'ar' => [
            'welcome' => 'أهلاً بك في Nomo',
            'subtitle' => 'منصة التعلم والدعم والإبداع والتواصل',
            'login' => 'تسجيل الدخول',
            'register' => 'إنشاء حساب',
            'lang' => 'اللغة:',
        ],
        'tr' => [
            'welcome' => 'Nomo\'ya Hoş Geldiniz',
            'subtitle' => 'Öğrenme, destek, yaratıcılık ve iletişim platformu',
            'login' => 'Giriş Yap',
            'register' => 'Kayıt Ol',
            'lang' => 'Dil:',
        ],
        'en' => [
            'welcome' => 'Welcome to Nomo',
            'subtitle' => 'Learning, support, creativity and communication platform',
            'login' => 'Login',
            'register' => 'Register',
            'lang' => 'Language:',
        ],
    ];

    return view('welcome', ['t' => $translations[$lang]]);
})->name('welcome');

/*
|--------------------------------------------------------------------------
| تغيير اللغة
|--------------------------------------------------------------------------
*/
Route::get('/set-language/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
})->name('set.language');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $lang = session('lang', 'ar');

    $translations = [
        'ar' => [
            'welcome' => '👋 أهلاً بك في منصة نمو',
            'choose' => 'اختر القسم الذي ترغب بزيارته:',
            'lang_section' => 'قسم تعلم اللغات',
            'lang_desc' => 'ابدأ بتعلم العربية، الإنجليزية، أو التركية.',
            'support_section' => 'قسم الدعم النفسي',
            'support_desc' => 'تمارين استرخاء وتدوين يومي.',
            'creativity_section' => 'قسم الإبداع',
            'creativity_desc' => 'طوّر مهاراتك وشارك بتحديات.',
            'motivation_section' => 'قسم التحفيز',
            'motivation_desc' => 'تابع تقدمك اليومي.',
            'community_section' => 'قسم المجتمع',
            'community_desc' => 'تواصل مع متعلمين آخرين.',
        ],
        'tr' => [
            'welcome' => '👋 Nomo Platformuna Hoş Geldiniz',
            'choose' => 'Ziyaret etmek istediğiniz bölümü seçin:',
            'lang_section' => 'Dil Öğrenme Bölümü',
            'lang_desc' => 'Arapça, İngilizce veya Türkçe öğrenin.',
            'support_section' => 'Psikolojik Destek',
            'support_desc' => 'Rahatlama egzersizleri ve günlük notlar.',
            'creativity_section' => 'Yaratıcılık',
            'creativity_desc' => 'Yaratıcı görevlerle becerilerinizi geliştirin.',
            'motivation_section' => 'Motivasyon',
            'motivation_desc' => 'Günlük ilerlemenizi takip edin.',
            'community_section' => 'Topluluk',
            'community_desc' => 'Diğer öğrenenlerle iletişim kurun.',
        ],
        'en' => [
            'welcome' => '👋 Welcome to Nomo Platform',
            'choose' => 'Choose a section to explore:',
            'lang_section' => 'Language Learning',
            'lang_desc' => 'Learn Arabic, English, or Turkish.',
            'support_section' => 'Mental Support',
            'support_desc' => 'Relaxation exercises and journaling.',
            'creativity_section' => 'Creativity',
            'creativity_desc' => 'Develop your creative skills.',
            'motivation_section' => 'Motivation',
            'motivation_desc' => 'Track your daily progress.',
            'community_section' => 'Community',
            'community_desc' => 'Connect with other learners.',
        ],
    ];

    return view('dashboard', ['t' => $translations[$lang]]);
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| قسم الدروس (Lessons) – CRUD كامل
|--------------------------------------------------------------------------
*/

/* عرض جميع الدروس */
Route::get('/lessons', [LessonController::class, 'index'])
    ->name('lessons.index');

/* صفحة إضافة درس */
Route::get('/lessons/create', [LessonController::class, 'create'])
    ->name('lessons.create');

/* حفظ درس جديد */
Route::post('/lessons', [LessonController::class, 'store'])
    ->name('lessons.store');

/* عرض درس واحد */
Route::get('/lessons/{lesson}', [LessonController::class, 'show'])
    ->name('lessons.show');

/* تعديل درس */
Route::get('/lessons/{lesson}/edit', [LessonController::class, 'edit'])
    ->name('lessons.edit');

/* تحديث درس */
Route::put('/lessons/{lesson}', [LessonController::class, 'update'])
    ->name('lessons.update');

/* حذف درس */
Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])
    ->name('lessons.destroy');

/*
|--------------------------------------------------------------------------
| الأقسام الرئيسية
|--------------------------------------------------------------------------
*/
Route::view('/support', 'sections.support')->name('support');
Route::view('/creativity', 'sections.creativity')->name('creativity');
Route::view('/motivation', 'sections.motivation')->name('motivation');
Route::view('/community', 'sections.community')->name('community');
Route::view('/mental-support', 'sections.mental-support')->name('mental.support');