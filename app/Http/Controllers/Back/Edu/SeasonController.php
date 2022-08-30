<?php

namespace App\Http\Controllers\Back\Edu;

use App\Models\Edu\Season;
use Illuminate\Http\Request;

class SeasonController
{
    public function index()
    {
        $seasons = Season::all();
        return view('edu.season.index',compact('seasons'));
    }

    public function create()
    {
        return view('edu.season.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Season::create([
            'title' => $request->title,
            'course' => $request->course,
            'user_id' => auth()->user()->email,
        ]);

        $notification = [
            'message' => 'با موفقیت ذخیره شد',
            'alert-type' => 'success'
        ];

        return redirect(route('admin.indexSeason'))->with($notification);
    }

    /*public function show($id)
    {
        $season = Season::findOrFail($id);
        return view('',compact('season'));
    }*/

    public function edit($id)
    {
        $season = Season::findOrFail($id);
        return view('edu.season.edit',compact('season'));
    }

    public function update($id,Request $request)
    {
        $season = Season::findOrFail($id);

        $request->validate([
            'title' => 'required'
        ]);

        $season->update([
            'title' => $request->title,
            'course' => $request->course,
        ]);

        $notification = [
            'message' => 'با موفقیت بروزرسانی شد',
            'alert-type' => 'success'
        ];

        return redirect(route('admin.indexSeason'))->with($notification);
    }

    public function delete($id)
    {
        $season = Season::findOrFail($id);
        $season->delete();
        $notification = [
            'message' => 'با موفقیت حذف شد',
            'alert-type' => 'success',
        ];
        return redirect(route('admin.indexSeason'))->with($notification);
    }
}
