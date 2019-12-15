<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function storepost(Request $request)
    {
        $data=array();
        $data['catagory_id']=$request->catagory_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $imagea=$request->file('image');
        
        if($imagea)
        {
            $imgname=uniqid();
            $imgtype=$imagea->getClientOriginalExtension();
            $imgtypesm=strtolower($imgtype);
            $img_full_name=$imgname.'.'.$imgtypesm;
            $upload_path='public/frontend/image/';
            $img_urlpath=$upload_path.$img_full_name;
            $setimg=$imagea->move($upload_path,$img_full_name);
            $data['img']=$img_urlpath;
            // print_r($image);
            DB::table('post')->insert($data);
            echo "success";

        }
        else{
            $noimg="noimg";
            $data['img']=$request->$noimg;
            DB::table('post')->insert($data);
            echo "not with image success";

        }
    

    }
    public function allpost()
    {
        
        $data=DB::table('post')->join('category','post.catagory_id','category.id')->select('post.*','category.name')->get();
       
        //return response()->json($data);
    
       return view('post.allpost',compact('data'));

  
    }
    public function viewpost($id)
    {
        
        $data=DB::table('post')->join('category','post.catagory_id','category.id')->where('post.id',$id)->select('post.*','category.name')->first();
       
        // //return response()->json($data);
        // echo $data->img;
       return view('post.viewpost',compact('data'));

  
    }
    public function editwritepost($id)
    {
       $cata= DB::table('category')->get();
       $post= DB::table('post')->where('id',$id)->first();
         return view('post.editwritepost',compact('cata','post'));
        // print_r($post);
    
    }
    public function updatepost(Request $request,$id)
    {
        $data=array();
        $data['catagory_id']=$request->catagory_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $imagea=$request->file('image');
        if($imagea)
        {
            $imgname=uniqid();
            $imgtype=$imagea->getClientOriginalExtension();
            $imgtypesm=strtolower($imgtype);
            $upload_path='public/frontend/image/';
            $img_full_name=$imgname.'.'.$imgtypesm;
            $img_urlpath=$upload_path.$img_full_name;
            $setimg=$imagea->move($upload_path,$img_full_name);
            $data['img']=$img_urlpath;
             $oldimg=$request->old_img;
             if( $oldimg)
             {
                unlink($oldimg);
             }
              
            DB::table('post')->where('id',$id)->update($data);
            //echo "postudate success".$oldimg;
            return Redirect()->route('allpost');
        }  
        else{
            
            $data['img']=$request->old_img;
            DB::table('post')->where('id',$id)->update($data);
            return Redirect()->route('allpost');

        }

    }
    // public function updatepost(Request $request,$id)
    public function deletepost($id)
    {
        $data=DB::table('post')->where('id',$id)->first();
        $image=$data->img;
        $delete=DB::table('post')->where('id',$id)->delete();
        if( $delete)
        {
           if($data->img)
           {
            unlink($data->img);
           }
           
            
        }
        
        return Redirect()->route('allpost');
        
    }
}
