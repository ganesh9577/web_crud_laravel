<?php

namespace App\Http\Controllers;
use App\Models\students;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    //
    public function index(request $req){
        $students = new students;
        $students->name = $req->name;
        $students->number = $req->number;
        $students->email = $req->email;
        $students->city = $req->city;
        $students->save();
        
        return redirect("showlist");

        // $data = students::all();
        // return view("/showdata",["datas"=>$data]);
    }
    public function list(){
        $data = students::all();
        return view("/showdata",["datas"=>$data]);
    }
    public function delete($id){
        $dd = students::find($id); 
        $dd->delete();
        return redirect("showlist");
    }
    public function foredit($id){
        $ddtt = students::find($id);
        return view("edit",['data'=>$ddtt]);
    }
    public function update(request $req,$id){
        $students = students::find($id);
        $students->name = $req->name;
        $students->number = $req->number;
        $students->email = $req->email;
        $students->city = $req->city;
        $students->save();
        // return "update";
        return redirect("showlist");
    }
}
?>