<?php

namespace App\Http\Controllers\Back\Edu;

use App\Models\Edu\Lesson;
use Illuminate\Http\Request;

class LessonController
{
    public function indexLesson()
    {
        $lessons = Lesson::all();
        return view('edu.lessons.index',compact('lessons'));
    }

    public function createLesson()
    {
        return view('edu.lessons.create');
    }

    public function storeLesson(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Lesson::create([
            'title' => $request->title,
            'l_file' => $request->l_file,
            'l_video' => $request->l_video,
            'season' => $request->season,
            'l_course' => $request->l_course,
            'l_free' => $request->l_free,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexLesson'))->with($notification);
    }

    public function editLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('edu.lessons.edit',compact('lesson'));
    }

    public function updateLesson($id,Request $request)
    {
        $lesson = Lesson::findOrFail($id);
        $request->validate([
            'title' => 'required',
        ]);

        $lesson->update([
            'title' => $request->title,
            'l_file' => $request->l_file,
            'l_video' => $request->l_video,
            'season' => $request->season,
            'l_course' => $request->l_course,
            'l_free' => $request->l_free,
        ]);

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexLesson'))->with($notification);
    }

    public function deleteLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
