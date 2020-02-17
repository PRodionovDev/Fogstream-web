<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    /**
     * Validate reCaptcha
     *
     * @param string $attribute  attribute rule
     * @param string $value      secret key
     * @param array  $parameters other parameters
     * @param object $validator  object of validator's class
     *
     * @return string
     */
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('CAPTCHA_SECRET'),
                    'response' => $value
                ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}