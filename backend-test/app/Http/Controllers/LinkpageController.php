<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkpageController extends Controller
{
    /**
     *
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function getUser(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        return view('linkpage', compact('id'));
    }
}
