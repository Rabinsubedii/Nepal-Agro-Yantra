<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\FooterMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index()
    {
     $menu = Menu::all();
     $footermenu = FooterMenu::all();
     return view('frontend.menu.allpage',compact(['menu','footermenu']));
    }
    
    public function page()
    {
      $menu = Menu::all();
     return view('frontend.menu.index',['menu'=>$menu]);
    }

    public function create()
    {
        return view('frontend.menu.create');
    } 

    public function store(Request $request)
    {
        $menu = new Menu;
        $menu ->name = $request->input('name');
        $menu ->url = $request->input('url');
        $menu->save();
           return redirect()->back()->with('status', 'Menu  Added Successfully');
    }

    public function edit($id)
    {
         $menu = Menu::find($id);
        return view('frontend.menu.edit', ['menu'=>$menu]);
    }

    public function update(Request $request, $id)
    {
         $menu = Menu::find($id);
         $menu ->name = $request->input('name');
         $menu ->url = $request->input('url');
         $menu->update();
        return redirect()->back()->with('status', 'Menu Updated Successfully');
    }

      public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('status', 'Menu Delete Successfully');
    }
}
