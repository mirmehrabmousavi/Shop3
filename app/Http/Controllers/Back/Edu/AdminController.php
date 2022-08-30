<?php

namespace App\Http\Controllers\Back\Edu;

use App\Http\Controllers\Controller;
use App\Models\Edu\Course;
use App\Models\Edu\EduCategory;
use App\Models\Edu\Lesson;
use App\Models\Edu\OnlineClass;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $courses = Course::all();
        $categories = EduCategory::all();
        $lessons = Lesson::all();
        $classes = OnlineClass::all();
        /*$pays = Transaction::all();*/
        return view('edu.home',compact('users','courses','categories','lessons','classes'));
    }

    public function settings()
    {
        $admin = Auth::user();
        $option = Option::where('id',1)->get();
        return view('edu.settings',compact('admin','option'));
    }

    public function indexUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'ico' => 'required',
            'banner_txt_1' => 'required',
            'banner_img_1' => 'required',
            'video_file' => 'required',
            'video_poster' => 'required',
            'banner_txt_2' => 'required',
            'banner_img_2' => 'required',
        ]);

        $settings = Option::find(1);

        $settings->title = $request->title;
        $settings->ico = $request->ico;
        $settings->banner_txt_1 = $request->banner_txt_1;
        $settings->banner_img_1 = $request->banner_img_1;
        $settings->video_file = $request->video_file;
        $settings->video_poster = $request->video_poster;
        $settings->banner_txt_2 = $request->banner_txt_2;
        $settings->banner_img_2 = $request->banner_img_2;
        $settings->save();


        $notification = [
            'message' => 'با موفقیت بروزرسانی شد.',
            'alert-type' => 'success'
        ];

        return redirect(route('admin.settings'))->with($notification);
    }

    public function settingsUpdate(Request $request)
    {
        $data = Auth::user();
        $data->fname = $request->fname;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->postcode = $request->postcode;
        $data->address = $request->address;
        $data->job = $request->job;
        $data->bio = $request->bio;


        if ($request->file('profile')) {
            $file = $request->file('profile');
            @unlink(public_path('upload/admin/settings/'.$data->profile));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin/settings'),$filename);
            $data['profile'] = env('APP_URL').'/public/upload/admin/settings/'.$filename;
        }

        $data->save();

        $notification = array(
            'message' => 'تنظیمات با موفقیت بروزرسانی شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.settings')->with($notification);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $admin = User::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();

            $notification = array(
                'message' => 'گذرواژه با موفقیت بروزرسانی شد.',
                'alert-type' => 'success'
            );
            return redirect()->route('logout')->with($notification);
        }else{
            return redirect()->back();
        }
    }

    public function createSocial(Request $request)
    {
        $request->validate([
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
        ]);

        $data = Auth::user();
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;
        $data->instagram = $request->instagram;
        $data->save();

        $notification = array(
            'message' => 'تنظیمات با موفقیت ذخیره شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.settings')->with($notification);
    }

/*    public function pays()
    {
        $transaction = Transaction::latest()->paginate(15);
        return view('edu.pays',compact('transaction'));
    }*/

    public function fileManager()
    {
        return view('edu.file-manager');
    }
}
