<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function user_form()
    {
        return view('backend.pages.user.user');
    }
    public function dashBoard()
    {
        return view('backend.pages.user.dash_board');
    }

    public function abc()
    {
        return view('backend.pages.abc');
    }
}
