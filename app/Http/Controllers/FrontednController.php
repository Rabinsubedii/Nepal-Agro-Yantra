<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Service;
use App\Models\Settings;
use App\Models\QuestionAnswer;
use App\Models\Topcard;
use App\Models\Menu;
use App\Models\FooterMenu;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontednController extends Controller
{
    //
    public function index(){
        $topcard = Topcard::limit(3)->get();
        $service = Service::limit(3)->get();
        $about = About::all();
        $setting = Settings::all();
        $product = Product::limit(3)->get();
        $menu = Menu::limit(6)->get();
        $footermenu = FooterMenu::limit(4)->get();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
        return view('frontend.index',compact([
            'about',
            'service',
            'topcard',
            'product',
            'setting',
            'menu',
            'footermenu',
            'footerproduct',
            'footerservice'
        ]));

    }
}
