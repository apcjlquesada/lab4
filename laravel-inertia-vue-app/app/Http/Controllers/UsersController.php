<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Redirect;


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


     /**
     * Edit the user account.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Users/Edit', [
            'user' => User::find($request->user),
        ]);
    }

    /**
     * Update the user information.
     */
    public function update(UserUpdateRequest $request): RedirectResponse
    {
        // Removes password field if it's null
        if (!$request->password) {
            unset($request['password']);
        }

        // Update the User details
        User::find($request->user)->update($request->all());

        // Redirect to the User Index page
        return Redirect::route('users.index');
    }





}