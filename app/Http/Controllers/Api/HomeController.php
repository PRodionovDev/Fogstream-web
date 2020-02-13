<?php

namespace App\Http\Controllers\Api;

use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $model = Profile::where('user_id', $user)->first();
        $model->photo = '/storage/' . $model->photo;

        return $model;
    }
}
