<?php

namespace App\Rules;

use Closure;
use http\Client;
use Illuminate\Contracts\Validation\ValidationRule;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $googleApi = new \GuzzleHttp\Client();
            $response = $googleApi->request('POST','https://www.google.com/recaptcha/api/siteverify',[
                'form_params' => [
                    'secret'    => env('RECAPTCHA_SECRET_KEY'),
                    'response'  => $value,
                    'remoteip' => request()->ip()
                ]
            ]);
            $response = json_decode($response->getBody());
        }
        catch (\Exception $exception)
        {
           'خطا -> مشکلی بوجود آمده است' ;
        }
    }
}
