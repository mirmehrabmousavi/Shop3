<?php

namespace Themes\DefaultTheme\src\Controllers\Edu;

use App\Http\Controllers\Controller;

class EduController extends Controller
{
    public function index()
    {
        return view('front::edu.index');
    }
}
