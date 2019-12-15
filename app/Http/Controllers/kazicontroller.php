<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class kazicontroller extends Controller
{
    public function go(){
        return view('welcome');
    }
    public function do(){
        return view('about');
    }
    public function tablefun()
    {
        return view('student.stuid');
    }
    public function writepost()
    {
        $allcatagory=DB::table('category')->get();
        return view('post.writepost',compact('allcatagory'));
    }
    public function addcatagory()
    {
        return view('post.addcata');
    }
    public function allcatagory()
    {
        $allcatagory=DB::table('category')->get();
        //print_r( $allcatagory);
       return view('post.allcata',compact('allcatagory'));
    }
    public function catagorys(Request $rsvpost)
    { 

       $data=array();
       $data['name']=$rsvpost->cataname;
       $data['slug']=$rsvpost->slugname;
       $catagory=DB::table('category')->insert($data);
       if($catagory)
       {
           return Redirect()->route('allcatagory');
       }
       else{
           return "not iserted";
       }
 
    }
    public function viewcat($getid)
    {
        $idwisecate=DB::table('category')->where('id',$getid)->first();
        return view('post/viewcat',compact('idwisecate'));
     

    }
    public function viewallcata($getid1)
    {
   
        $delete=DB::table('category')->where('id',$getid1)->delete();
        //  echo "delete success";
        return Redirect()->back();
     

    }

    public function editcata(Request $request,$id)
    {
        $edit=DB::table('category')->where('id',$id)->first();
        return view('post/editcata',compact('edit'));
    }

    public function updatecata(Request $request,$id)
    {     

        $update=array();
        $update['name']=$request->cataname;
        $update['slug']=$request->slugname;
        $edit=DB::table('category')->where('id',$id)->update($update);
        return Redirect()->route('allcatagory');
    }


}
