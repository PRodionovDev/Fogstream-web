<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class LogoutController extends ApiController
{
    /**
     * @SWG\Post(
     *     path="/logout",
     *     summary="Log Out",
     *     tags={"User"},
     *     @SWG\Response(
     *         response=200,
     *         description="You are successfully logged out"
     *     )
     * )
     */
    public function __invoke(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json(
            [
                'message' => 'You are successfully logged out',
            ]
        );
    }
}