<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ThirdPartyUserController extends Controller
{
    public function users()
    {     
       $users = Http::get('https://reqres.in/api/user');
        //return $users['data'];
        return view('ThirdPartyUsers.users',['users'=>$users['data']]);
    }

}
