<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Votes;

class HomeController extends Controller
{
    public function index(){
        $user_count = User::count();
        $vote_count = Votes::count();
        return view('admin.home', compact('user_count', 'vote_count'));
    }

    public function getUser(){
        $data = User::where('is_admin', 0)->get();
        return view('admin.user.index', compact('data'));
    }
}
