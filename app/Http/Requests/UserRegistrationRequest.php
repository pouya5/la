<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Captcha;

class UserRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'=>'required',
            'family'=>'required',
            'phone-number'=>'required',
            'password'=>'required|confirmed',
            'gender'=>'required|gender',
            'news_feed'=>'boolean',
            'g-recaptcha-response'=>new Captcha
        ];
    }
}
