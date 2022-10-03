<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $login = $request->input('login');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into users (login, name, email, password) values (?, ?, ?, ?)', [$login, $name, $email, $password]);
        return 200;
    }
    public function index()
    {
        $users = DB::table('users')->insert([]);
        return $users;
    }
}
