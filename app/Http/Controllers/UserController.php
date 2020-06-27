<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function listUser()
    {
       /* $user = new User();
        $user->name = 'Pedro das Couves';
        $user->email = 'pedro@email.com';
        $user->password = Hash::make('123');
        $user->save();*/
        //echo "<h1>Listagem dos Usuários</h1>";
        $user = User::where('id','=',1)->first();

        return view('listUser',[
            'user'=>$user
        ]);
    }
}
