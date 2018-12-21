<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SysStatic;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($cat_id){
        $pro_cate=Product::where('category_id',$cat_id)->orderBy('order','asc')->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();
        return view("frontend.category.category_detail",compact("sys_SecondOffer","sys_FirstOffer","pro_cate","sys_static","sys_s","sys_logo","sys_adv","sys_footerLeft"));
    }
}
