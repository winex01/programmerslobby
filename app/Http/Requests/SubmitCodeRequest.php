<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitCodeRequest extends FormRequest
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
        $data = [
            'title' => 'required|min:10',
            'description' => 'required|min:200',
            'code' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'tags' => 'required'
        ];

        $data['image'] = 'mimes:jpeg,jpg,png,gif';
        
        if ($this->method() != 'PATCH') {
            $data['image'] = 'required|mimes:jpeg,jpg,png,gif';
        }

        return $data;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Please verify that you are not robocop :)',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
            'image.required' => 'The cover photo field is required!',
            'code.required' => 'The sourcecode link field is required!'
        ];
    }
}
