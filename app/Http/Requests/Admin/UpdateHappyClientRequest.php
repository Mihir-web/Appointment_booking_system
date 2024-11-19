<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHappyClientRequest extends FormRequest
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
            'message' => 'required|string|max:125',
            'photo_hidden' => 'required',
            'display_order' => 'required',
            'bid' => 'required'
        ];
    }
    
       public function messages() {
        return [
            'message.required' => 'Message field is required.',
            'message.max' => 'Max 120 characters are allowed.',
            'photo.required' => 'Photo field is required.'
        ];
    }
}
