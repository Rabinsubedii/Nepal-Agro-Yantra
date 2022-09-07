<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Service;
use App\Models\FooterMenu;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    //
    public function index()

    {
        $setting = Settings::all();
        $menu = Menu::all();
        $product = Product::all();
        $footermenu = FooterMenu::all();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
        return view('frontend.users.login',compact(['setting','product','menu','footermenu','footerproduct','footerservice']));
    }
}
