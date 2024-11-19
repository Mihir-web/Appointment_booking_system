<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactInfoRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required',
            'phone_no' => 'required',
            'whatsapp_no' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'meta_title'=> 'required',
            'meta_description'=> 'required',
        ];
    }
    
       public function messages() {
        return [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
            'phone_no.required' => 'Phone No field is required.',
            'whatsapp_no.required' => 'Whatsapp No field is required.',
            'instagram.required' => 'Instagram field is required.',
            'facebook.required' => 'Facebook field is required.',
            'meta_title.required' => 'Meta Title field is required.',
            'meta_description.required' => 'Meta Description field is required.',
        ];
    }
}
