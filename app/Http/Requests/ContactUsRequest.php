<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Please verify that you are not a robocop :)',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.'
        ];
    }
}
