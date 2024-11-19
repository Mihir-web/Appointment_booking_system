<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFinancingApplicationRequest extends FormRequest
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
            // 'first_name' => 'required|string|handle_xss|no_url',
            // 'last_name' => 'required|string|handle_xss|no_url',
            // 'email' => 'required|email|handle_xss|no_url',
            // 'phone' => 'required|min:6|handle_xss|no_url',
            // 'message' => 'nullable|handle_xss|no_url',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:6',
            'terms_and_condition' => 'required',
            'g-recaptcha-response' => 'required'
        ];
    }
    
       public function messages() {
        return [
            'first_name.required'=>'First Name field is required.',
            'first_name.handle_xss' => 'Please enter valid input.',
            'last_name.required'=>'Last Name field is required.',
            'last_name.handle_xss' => 'Please enter valid input.',
            'email.required'=>'Email is required.',
            'email.email'=>'Please enter valid email.',
            'phone.min'=>'Please enter at least 6 numbers.',
            'phone.required'=>'Phone is required.',
            'terms_and_condition.required' => 'This fied is requrired.',
            'g-recaptcha-response.required'=>'Captcha is required.'
        ];
    }
}
