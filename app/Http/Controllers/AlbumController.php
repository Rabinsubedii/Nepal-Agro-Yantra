<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Image;
use App\Models\Settings;
use App\Models\Menu;
use App\Models\FooterMenu;
use App\Models\Service;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class AlbumController extends Controller
{
    //
    public function index()
    {
     $album = Album::all();
     return view('frontend.album.index',compact(['album']));
    }

    public function create()
    {
   return view('frontend.album.create');
    }

     public function store(Request $req){
        $album = new Album;
        $album ->title = $req->input('title');
        if($req->hasfile('thumbnail'))
        {
            $file = $req->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/thumbnail/',$filename);
            $album->thumbnail=$filename;
        }
       $album->save();
        if($req->has('images')){
            foreach($req->file('images')as $image){
                $imageName = $album['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('productimages'),$imageName);
                Image::create([
                    'album_id'=>$album->id,
                    'image'=>$imageName
                ]);
            }
        }
       return redirect()->back()->with('status', ' Added Successfully');
    }

    public function images($id){
      $setting = Settings::all();  
       $products = Product::all();  
        $footermenu = FooterMenu::all();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
        $menu = Menu::all();  
        $product = Album::find($id);
        if(!$product) abort(404);
        $images = $product->images;
        return view('frontend.album.images',compact('product','images' ,'setting', 'products', 'footermenu', 'footerproduct','footerservice', 'menu'));
    }

    public function adminimage($id)
    { $setting = Settings::all();  
       $products = Product::all();  
        $footermenu = FooterMenu::all();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
        $menu = Menu::all();  
        $product = Album::find($id);
        if(!$product) abort(404);
        $images = $product->images;
        return view('frontend.album.adminallimage',compact('product','images' ,'setting', 'products', 'footermenu', 'footerproduct','footerservice', 'menu'));

    }

    public function pictures()
    {
       $album = Album::all();  
       $setting = Settings::all();  
       $product = Product::all();  
        $footermenu = FooterMenu::all();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
        $menu = Menu::all();  
       return view('frontend.album.photos',compact(['album','setting','product','menu' , 'footermenu','footerproduct','footerservice']));
    }

    public function edit($id)
    {
        $album = Album::find($id);
        if(!$album) abort(404);
        $images = $album->images;
        return view('frontend.album.edit',compact('album' ,'images'));
    }

    
    public function update(Request $req, $id)
    {
         $album = Album::find($id);
         $album ->title = $req->input('title');
        if($req->hasfile('thumbnail'))
        {
            $destination = 'uploads/thumbnail/'.$album->thumbnail;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/thumbnail/',$filename);
            $album->thumbnail=$filename;
        }
        $album->update();
            if($req->has('images')){
            $destinationimage = 'productimages'.$album->thumbnail;
            if(File::exists($destinationimage))
            {
                File::delete($destinationimage);
            }
            foreach($req->file('images')as $image){
                $imageName = $album['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('productimages'),$imageName);
                Image::create([
                    'album_id'=>$album->id,
                    'image'=>$imageName
                ]);
            }
        }
       return redirect()->back()->with('status', ' Update  Successfully');
    }

       public function destroy($id){
        $album = Album::find($id);
        $destination = 'uploads/thumbnail/'.$album->thumbnail;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $album->images()->delete();
        $album->delete();

        return redirect()->back()->with('status', 'Delete Data Successfully');
    }

    public function removeImage($id){
        $image = Image::find($id);
        if(!$image) abort(404);
        unlink(public_path('productimages/'.$image->image));
        $image->delete();
     return redirect()->back()->with('status', ' Delete  Successfully');
    }

}
