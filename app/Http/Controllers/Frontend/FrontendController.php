<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_product = Product::where('trending','1')->take(15)->get();
        $trending_category = Category::where('popular','1')->take(15)->get();
        return view('frontend.index')->with(compact('featured_product','trending_category'));;
    }
    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category')->with(compact('category'));
    }
    public function viewcategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
         $category = Category::where('slug',$slug)->first();
         $products = Product::where('cate_id',$category->id)->where('status','0')->get();
         return view('frontend.product.index')->with(compact('category','products'));
        }
        else
        {
            return redirect('/')->with('status','Slug doed not exists');
        }
        $product = Product::where('status','0')->get();
        return view('frontend.category')->with(compact('category'));
    }
}
