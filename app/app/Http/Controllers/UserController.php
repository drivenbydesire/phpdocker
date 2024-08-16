<?php

namespace App\Http\Controllers;

use App\Http\Services\YoutubeLoginService;

class UserController extends Controller {
    public function index():int {
        //$users = User::all();
        $users = array('id'=>2, 'email'=>'pqr@xyz.com');
        var_dump($users);
        //return view('users', compact('users'));
    }

    public function youtubeLogin():string{
        //Call service class like.
        return response()->json(YoutubeLoginService::getTest());
        //echo 'Test Youtube Login';
    }
}

?>
