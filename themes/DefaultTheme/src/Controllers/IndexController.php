<?php

namespace Themes\DefaultTheme\src\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('front::index.index');
    }
}
