<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddTestimonialRequest extends FormRequest
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
            'client_first_name' => 'required|string',
            'client_last_name' => 'required|string',
            'gender' => 'required',
            'rating' => 'required',
            'message' => 'required|string'
        ];
    }
    
       public function messages() {
        return [
            'client_first_name.required' => 'Client First Name field is required.',
            'client_last_name.required' => 'Client Last Name field is required.',
            'gender.required' => 'Gender field is required.',
            'rating.required' => 'Rating field is required.',
            'message.required' => 'Message field is required.'
        ];
    }
}
