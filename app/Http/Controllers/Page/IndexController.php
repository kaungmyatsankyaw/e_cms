<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        return view('page.index');
    }
}
