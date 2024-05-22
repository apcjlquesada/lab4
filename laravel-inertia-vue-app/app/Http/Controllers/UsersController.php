<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UsersController extends Controller
{
    /**
     * Display the active users.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Users/Index', [
            'users' => User::all(),
        ]);
    }
}