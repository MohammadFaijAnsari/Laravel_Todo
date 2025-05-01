<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
  public function savedata(Request $request){
    $data=DB::table('todolist')->insert([
       'name'=>$request->name,
       'email'=>$request->email
    ]);
    if($data){
        // echo "Data is Save";
        return redirect()->route('todo.show');
    }else{
        echo "Data is Not Save";
    }
  } 
  
  public function showdata(){
    // $data=DB::table('todolist')->simplePaginate(4);
    $data=DB::table('todolist')->get();
    return view('TodoListData',['data'=>$data]);
  }
  public function deletedata($id){
    $data=DB::table('todolist')->where('id','=',$id)->delete();
    // return view('TodoListData');
    return redirect()->route('todo.show');
  }
}
