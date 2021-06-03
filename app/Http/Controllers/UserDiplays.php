<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBlog;
class UserDiplays extends Controller
{
    //

    function list(){
      $data = UserBlog::all();
        return view('home', ['data'=>$data]);
    }

function read($id){
$data= UserBlog::find($id);
return view('readmore', ['data'=> $data]);
// $data = UserBlog::all();
// return view('readmore', ['data'=>$data]);


}


}
