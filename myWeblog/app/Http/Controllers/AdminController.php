<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Newspost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function aHome()
    {
        return view('admin.home');
    }

}
