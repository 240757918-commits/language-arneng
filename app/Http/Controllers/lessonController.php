<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    /**
     * عرض جميع الدروس (index)
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }

    /**
     * عرض صفحة إنشاء درس جديد (create)
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * تخزين درس جديد (store)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
           'language' => 'required|in:ar,tr,en',
           'level'    => 'required|in:beginner,intermediate,advanced',
        ]);

        Lesson::create($validated);

        return redirect()
            ->route('lessons.index')
            ->with('success', 'Ders başarıyla eklendi');
    }

    /**
     * عرض تفاصيل درس واحد (show)
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    /**
     * عرض صفحة تعديل الدرس (edit)
     */
    public function edit(Lesson $lesson)
    {
        return view('lessons.edit', compact('lesson'));
    }

    /**
     * تحديث الدرس (update)
     */
    public function update(Request $request, Lesson $lesson)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'language'    => 'required|string|max:100',
            'level'       => 'required|string|max:50',
        ]);

        $lesson->update($validated);

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Ders başarıyla değiştirildi');
    }

    /**
     * حذف الدرس (destroy)
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return redirect()
            ->route('lessons.index')
            ->with('success', 'Ders başarıyla silindi');
    }




}