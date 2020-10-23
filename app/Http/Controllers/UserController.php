<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $batas = 5;
        $user = User::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($user->currentPage() - 1);
        return view('admin.user.index', compact('user', 'no'));
    }
}
