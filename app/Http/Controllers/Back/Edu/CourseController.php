<?php

namespace App\Http\Controllers\Back\Edu;

use App\Http\Controllers\Controller;
use App\Models\Edu\Course;
use App\Models\Edu\EduCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexCourse()
    {
        $courses = Course::all();
        return view('edu.courses.index',compact('courses'));
    }

    public function createCourse()
    {
        $cat = EduCategory::all();
        return view('edu.courses.create',compact('cat'));
    }

    public function storeFirstCourse(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        Course::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'd_price' => $request->d_price,
            'd_price_off' => $request->d_price_off,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'c_poster' => $request->c_poster,
            'c_demo' => $request->c_demo,
            'time' => $request->time,
            'status' => $request->status,
            'status_upload' => 'پیش نویس',
            'language' => $request->language,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexCourse'))->with($notification);
    }

    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        $cat = EduCategory::all();
        $category = EduCategory::findOrFail($id);
        return view('edu.courses.edit',compact('course','cat','category'));
    }

    public function updateCourse($id,Request $request)
    {
        $course = Course::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        $course->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'd_price' => $request->d_price,
            'd_price_off' => $request->d_price_off,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'c_poster' => $request->c_poster,
            'c_demo' => $request->c_demo,
            'time' => $request->time,
            'status' => $request->status,
            'status_upload' => $request->status_upload,
            'language' => $request->language,
            'category_id' => $request->category_id,
        ]);

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexCourse'))->with($notification);
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexCourse'))->with($notification);
    }
}
