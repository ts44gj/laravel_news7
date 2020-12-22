<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    /**
    *ブログ一覧表示
    * @return view
    */
    public function showList()
    {
        $users= users::all();
        return view('user.list',['users'=>$users]);
    }
    /**
    *ブログ一覧表示
    * @param init $id
    * @return view
    */
    public function showDetail($id)
    {
        $user= users::find($id);
        return view('user.detail',['user'=>$user]);
    }
}
