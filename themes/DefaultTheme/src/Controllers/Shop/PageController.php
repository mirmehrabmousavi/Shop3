<?php

namespace Themes\DefaultTheme\src\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($page)
    {
        $page = Page::where('slug', $page)->orWhere('id', $page)->firstOrFail();

        return view('front::pages.show', compact('page'));
    }
}
