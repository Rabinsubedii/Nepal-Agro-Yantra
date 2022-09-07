<?php

namespace App\Http\Controllers;
use App\Models\FooterMenu;
use Illuminate\Http\Request;

class FooterMenuController extends Controller
{
    //

      public function create()
    {
        return view('frontend.footermenu.create');
    } 

    public function store(Request $request)
    {
        $footermenu = new FooterMenu;
        $footermenu ->name = $request->input('name');
        $footermenu ->url = $request->input('url');
        $footermenu->save();
           return redirect()->back()->with('status', 'Relate Link Added Successfully');
    }

    public function edit($id)
    {
        $footermenu = FooterMenu::find($id);
        return view('frontend.footermenu.edit', ['footermenu'=>$footermenu]);
    }

    public function update(Request $request, $id)
    {
         $footermenu = FooterMenu::find($id);
         $footermenu ->name = $request->input('name');
         $footermenu ->url = $request->input('url');
         $footermenu->update();
        return redirect()->back()->with('status', 'Relate Link Updated Successfully');
    }

      public function destroy($id)
    {
        $footermenu = FooterMenu::find($id);
        $footermenu->delete();
        return redirect()->back()->with('status', 'Relate Link Delete Successfully');
    }
}
