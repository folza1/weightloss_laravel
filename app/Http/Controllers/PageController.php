<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as Input;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function process(RegisterRequest $request)
    {
        $request->validated();
    }
}
