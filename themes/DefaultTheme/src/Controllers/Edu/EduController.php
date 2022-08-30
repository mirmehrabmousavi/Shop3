<?php

namespace Themes\DefaultTheme\src\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Models\Edu\Course;
use App\Models\Edu\EduCategory;
use App\Models\Edu\EduOption;
use App\Models\Edu\OnlineClass;
use App\Models\User;

class EduController extends Controller
{
    public function index()
    {
        $cat = EduCategory::where('parent_id',null)->get();
        $courses = Course::where('status_upload','منتشر شده')->paginate(5);
//        $users = User::where('is_seller',1)->paginate(3);
        $option = EduOption::where('id',1)->get();
        $classes = OnlineClass::latest()->paginate(5);
        return view('front::edu.index',compact('cat', 'courses', 'option', 'classes'));
    }

    public function courses()
    {
        $courses = Course::latest()->paginate(8);
        $users = User::all();
        $cat = EduCategory::where('parent_id',null)->get();
        return view('front::edu.courses',compact('courses','users','cat'));
    }

    public function coursesCat($id)
    {
        $category = EduCategory::findOrFail($id);
        $users = User::all();
        $cat = EduCategory::where('parent_id',null)->get();
        $courses = Course::where('status_upload','منتشر شده')->where('category_id',$category->category_name)->paginate(8);
        return view('front::edu.courses-cat',compact('courses','cat','users'));
    }

    public function courseShow($id)
    {
        $course = Course::findOrFail($id);
        return view('front::edu.course.show',compact('course'));
    }

    public function classes()
    {
        $users = User::all();
        $cat = EduCategory::where('parent_id',null)->get();
//        $teachers = User::where('is_seller',1)->get();
        $classes = OnlineClass::latest()->paginate(10);
        return view('front::edu.classes',compact('classes','cat','users'));
    }

    public function classShow($id)
    {
        $class = OnlineClass::findOrFail($id);
        return view('front::edu.class.show',compact('class'));
    }
}
