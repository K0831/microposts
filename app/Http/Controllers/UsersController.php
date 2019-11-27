<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        // 新しいユーザーが上に来るように入れ替え
       $users = User::orderBy('id', 'desc')->paginate(1);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    
    public function show($id){
        $user = User::find($id);

        return view('users.show', [
            'user' => $user,
        ]);
    }
    
}
