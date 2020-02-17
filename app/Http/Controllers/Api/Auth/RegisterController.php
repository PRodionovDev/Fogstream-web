<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\Auth\RegisterFormRequest;
use App\User;

class RegisterController extends ApiController
{
    /**
     * @SWG\Post(
     *     path="/register",
     *     summary="Register",
     *     tags={"User"},
     *     @SWG\Parameter(
     *         name="name",
     *         in="formData",
     *         description="User Name",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="email",
     *         in="formData",
     *         description="User Email",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="password",
     *         in="formData",
     *         description="User Password",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="You were successfully registered. Use your email and password to sign in.",
     *     )
     * )
     */
    public function __invoke(RegisterFormRequest $request)
    {
        $user = User::create(
            array_merge(
                $request->only('name', 'email'),
                ['password' => bcrypt($request->password)]
            )
        );

        return response()->json(
            [
                'message' => 'You were successfully registered. Use your email and password to sign in.'
            ], 200
        );
    }
}
