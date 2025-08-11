<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Admin\UserRequest;

class ModerateurController extends Controller
{
    public function index()
    {
         return view('admin.moderateur.index', [
            'users' => User::orderby('created_at', 'desc')->paginate(10)
        ]);
    }

    
}
