<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index(){
        $data['date'] = Carbon::now()->format('l, d F Y');
        if(Auth::user()) $data['user_role'] = User::role();
        return view('home')->with($data);
    }
}
