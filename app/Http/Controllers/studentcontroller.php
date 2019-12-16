<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class studentcontroller extends Controller
{
    public function addstudents()
    {
        return view('student/studentsadd');
    }
    public function storestudent(Request $request)
    {
        $data=new student;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phon = $request->phon;
        $save=$data->save();
    if($save)
    {
      
       return Redirect()->back();
    }
        else{
            echo "not save";
        }

        
    }
    public function viewstudent() 
    {
       // $studata=student::get();
        $studata=student::all();
        return view('student/viewstudents',compact('studata'));
    }
    public function viewstu($id)
    {
       // $studata=student::get();
        $studata=student::findorfail($id);
        return view('student/idwisestuview',compact('studata'));
       // print_r($studata);
    }
    public function deleteidwisestu($id)
    {
       $delete=student::find($id);
       $deleteted=$delete->delete();
       if($deleteted)
       {
           return redirect()->back();
       }
       else
       {
           echo "not deleted";
       }
    }
    public function editstu($id)
    {
        $studata=student::find($id);
        return view('student/studentedit',compact('studata'));
       
    }
    public function update(Request $request,$id)
    {
        $studata=student::find($id);
        $studata->name=$request->name;
        $studata->email=$request->email;
        $studata->phon=$request->phon;
        $studata->update();
        return Redirect()->route('viewstudent');
        
       
    }
}
