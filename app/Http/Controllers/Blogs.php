<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBlog;
class Blogs extends Controller
{
     function save(Request $request)
    {
        //print_r($request->input());
         $user = new UserBlog;
         $user->user = $request->user_name;
         $user->blog = $request->blog;
         $user->title = $request->title;
        if ($user->save()){

            return redirect()->route('index');
        }else{
            return redirect->back();
        }
    

    }
}
