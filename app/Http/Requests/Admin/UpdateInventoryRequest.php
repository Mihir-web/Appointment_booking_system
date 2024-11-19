<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryRequest extends FormRequest
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
            'bid' => 'required',
            'model' => 'required',
            'car_type' => 'required',
            'engine' => 'required',
            'brand' => 'required',
            'trim' => 'required',
            'exterior_color' => 'required',
            'interior_color' => 'required',
            'km_driven' => 'required',
            'transmission_type' => 'required',
            'full_price' => 'required',
            'biweekly_price' => 'required',
            'biweekly_price_percentage' => 'required',
            'biweekly_installment_period' => 'required',
            'description' => 'required',
            // 'photo_hidden' => 'required',
            // 'photo' => ['required_if:want_to_upload_photo,1','required_if:photo_hidden,'],
            'meta_title'=> 'required',
            'meta_description'=> 'required',
        ];
    }
    
       public function messages() {
        return [
            'name.required' => 'Name field is required.',
            'bid.required' => 'Bid field is required.',
            'engine.required' => 'Alias field is required.',
            'model.required' => 'Model field is required.',
            'brand.required' => 'Brand field is required.',
            'trim.required' => 'Trim field is required.',
            'exterior_color.required' => 'Exterior Color field is required.',
            'interior_color.required' => 'Interior Color field is required.',
            'km_driven.required' => 'KM Driven field is required.',
            'transmission_type.required' => 'Tramission Type field is required.',
            'full_price.required' => 'Full Price field is required.',
            'biweekly_price_percentage.required' => 'Biweekly Price Percentage field is required.',
            'biweekly_installment_period.required' => 'Biweekly Installment Period field is required.',
            'description.required' => 'Description field is required.',
            // 'photo_hidden.required' => 'Photo field is required.',
            // 'photo.required_if' => 'Photo field is required.',
            'meta_title.required' => 'Meta Title field is required.',
            'meta_description.required' => 'Meta Description field is required.',
        ];
    }
}
