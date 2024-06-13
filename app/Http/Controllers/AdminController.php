<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            # code...
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                # code...
                return view('dashboard');
            } elseif ($usertype == 'admin') {
                # code...
                return view('admin.index');
            } else {

                return redirect()->back();
            }
        }
    }

    public function home()
    {
        return view('home.index');
    }
}
