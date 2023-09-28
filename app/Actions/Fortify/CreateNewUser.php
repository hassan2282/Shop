<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'g-recaptcha-response' => ['required',new ReCaptcha()]
        ],[
            'name.max' => 'لطفا نام کوتاه تری انتخاب کنید',
            'email.max' => 'لطفا ایمیل کوتاه تری انتخاب کنید',
            'email.unique' => 'این ایمیل قبلا ثبت شده است',
            'g-recaptcha-response.required' => 'لطفا تیک ریکپچا را حتما بزنید',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
