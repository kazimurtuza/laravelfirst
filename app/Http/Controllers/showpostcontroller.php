<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class showpostcontroller extends Controller
{

   public function index()
   {
    $getpost=DB::table('post')->join('category','post.catagory_id','category.id')->select('post.*',('category.name'),('category.slug'))->paginate(3);
       return view('root',compact('getpost'));
        
   }
}
