<?php

namespace App\Http\Controllers\Api;

use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends ApiController
{
    /**
     * @SWG\Get(
     *     path="/home",
     *     summary="Get list of profile",
     *     tags={"Profile"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Profile")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function index()
    {
        $user = Auth::user()->id;
        $model = Profile::where('user_id', $user)->first();
        $model->photo = '/storage/' . $model->photo;

        return $model;
    }
}
