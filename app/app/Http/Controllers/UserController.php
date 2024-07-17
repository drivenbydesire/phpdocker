<?php

namespace App\Http\Controllers;

class UserController extends Controller {
    public function index() {
        //$users = User::all();
        $users = array('id'=>2, 'email'=>'pqr@xyz.com');
        return view('users', compact('users'));
    }
}

?>  