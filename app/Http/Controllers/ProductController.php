<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Menu;
use App\Models\FooterMenu;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product=Product::all(); 
        return view('frontend.product.index',['product'=>$product]);
    }

     public function create()
    {
        $product=Product::all(); 
        return view('frontend.product.create');
    }

    public function store(Request $request)
    {
       $product = new Product;
        $product ->title = $request->input('title');
        $product ->description = $request->input('description');
        $product ->short_description = $request->input('short_description');
        $product ->slug = Str::slug($request->input('slug')); 
        
        if($request->hasfile('banner_image_one'))
        {
            $file = $request->file('banner_image_one');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannerfirst/',$filename);
            $product->banner_image_one=$filename;
        }
        
        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/producticon/',$filename);
            $product->icon=$filename;
        }
        
        if($request->hasfile('banner_image_second'))
        {
            $file = $request->file('banner_image_second');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannersecond/',$filename);
            $product->banner_image_second=$filename;
        }
        if($request->hasfile('banner_image_third'))
        {
            $file = $request->file('banner_image_third');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannerthird/',$filename);
            $product->banner_image_third=$filename;
        }
        
        $product->save();
        return redirect()->back()->with('status', 'Product Added Successfully');
    }

    public function productview($slug)
    {
        $setting = Settings::all();
        if(Product::where('slug',$slug)->exists())
        {
            $product = Product::where('slug',$slug)->first();
            $setting = Settings::all();
            $menu = Menu::all();
            return view('frontend.product.productdetails',compact(['product','setting','menu']));
        }else{
            return redirect ('/')->with('status',"The link was broken");
        }
    }

    public function edit($id)
    {
         $product = Product::find($id);
        return view('frontend.product.editproduct',compact('product'));
        
    }

    public function update(Request $request, $id)
    {
         $product = Product::find($id);
         $product ->title = $request->input('title');
         $product ->description = $request->input('description');
         $product ->short_description = $request->input('short_description');
        if($request->hasfile('icon'))
        {
             $destination = 'uploads/producticon/'.$product->icon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/producticon/',$filename);
            $product->icon=$filename;
        }
        
        if($request->hasfile('banner_image_first'))
        {
             $destination = 'uploads/bannerfirst/'.$product->banner_image_first;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image_first');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannerfirst/',$filename);
            $product->banner_image_first=$filename;
        }

        if($request->hasfile('banner_image_second'))
        {
             $destination = 'uploads/bannersecond/'.$product->banner_image_second;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image_second');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannersecond/',$filename);
            $product->banner_image_second=$filename;
        }

        if($request->hasfile('banner_image_third'))
        {
             $destination = 'uploads/bannerthird/'.$product->banner_image_third;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image_third');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/bannerthird/',$filename);
            $product->banner_image_third=$filename;
        }
        $product->update();
        return redirect()->back()->with('status', 'Updated Successfully');
        }

    
    public function destroy($id){
        $product = Product::find($id);
        $destination = 'uploads/producticon/'.$product->icon;
        $destination = 'uploads/bannerfirst/'.$product->banner_image_first;
        $destination = 'uploads/bannersecond/'.$product->banner_image_second;
        $destination = 'uploads/bannerthird/'.$product->banner_image_third;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $product->delete();
        return redirect()->back()->with('status', 'Delete Data Successfully');
    }

    public function allProduct()
    {
        $product = Product::all();
        $menu = Menu::all();
        $footermenu = FooterMenu::all();
        $footerproduct = Product::all();
        $footerservice = Service::all();
        $setting = Settings::all();
        return view ('frontend.product.allproduct',compact(['product','setting','menu','footermenu','footerservice','footerproduct']));
    }
    

}
