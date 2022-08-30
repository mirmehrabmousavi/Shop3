<?php

namespace App\Http\Controllers\Back\Edu;

use App\Models\Edu\OnlineClass;
use Illuminate\Http\Request;

class OnlineClassController
{

    public function index()
    {
        $onlineClasses = OnlineClass::all();
        return view('edu.onlineClass.index', compact('onlineClasses'));
    }

    public function create()
    {
        return view('edu.onlineClass.create');
    }

    public function store(Request $request)
    {
        OnlineClass::create([
            'user_id' => $request->user()->id,
            'topic' => $request->topic,
            'start_time' => $request->start_time,
            'duration' => $request->duration,
            'join_url' => $request->join_url,
            'password' => $request->password,
            'poster' => $request->poster,
            'price' => $request->price,
        ]);

        $notification = [
            'message' => 'با موفقیت ذخیره شد',
            'alert-type' => 'success'
        ];
        return redirect()->route('onlineClass.index')->with($notification);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $onlineClass = OnlineClass::findOrFail($id);
        return view('edu.onlineClasses.edit',compact('onlineClass'));
    }

    public function update(Request $request, $id)
    {
        try {
            $onlineClass = OnlineClass::findOrFail($id);
            $onlineClass->update([
                'topic' => $request->topic,
                'start_time' => $request->start_time,
                'duration' => $request->duration,
                'join_url' => $request->join_url,
                'password' => $request->password,
                'poster' => $request->poster,
                'price' => $request->price,
            ]);

            $notification = [
                'message' => 'با موفقیت بروزرسانی شد',
                'alert-type' => 'success'
            ];
            return redirect()->route('online_classes.index')->with($notification);
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $onlineClass = OnlineClass::findOrFail($id);
            $onlineClass->delete();
            $notification = [
                'message' => 'با موفقیت حذف شد',
                'alert-type' => 'success'
            ];
            return redirect()->route('online_classes.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
