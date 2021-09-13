<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    //

    public function index()
    {
        return view('admin/index');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function register()
    {
        return view('admin/register');
    }

    public function tables()
    {
        return view('admin/tables');
    }

    public function charts()
    {
        return view('admin/charts');
    }

    public function password()
    {
        return view('admin/password');
    }

    public function logout()
    {
        return view('admin/logout');
    }
    
    public function form()
    {
        return view('admin/form');
    }
    

    
}
