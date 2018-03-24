<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category' => 'required',
            'subcategory' => 'required',
            'provider' => 'required',
            'name' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:1000',
            'discount' => 'numeric|min:1000',
            'quantity' => 'required|min:1|max:100'
        ];
    }


    public function messages(){
        return [
            'category.required' => 'Please chose a category !',
            'subcatename.required' => 'Please chose a sub category !',
            'name.required' => 'Please enter name product !',
            'provider.required' => 'Please chose a provider !',
            'image.*.image' => 'Please upload an image!',
            'image.*.mimes' => 'Only jpeg,png,jpg,gif and svg images are allowed!',
            'image.*.max' => 'Sorry ! Maximum allowed size for an image is 2MB!',
            'price.required' => 'Please enter price !',
            'price.numeric' => 'Price must be a number !',
            'price.min' => 'Minimum price is 1000 !',
            'discount.numeric' => 'Discount price must be a number !',
            'discount.min' => 'Minimum discount price is 1000 !',
            'quantity.required' => 'Please enter quantity !',
            'quantity.min' => 'Sory ! Minimum allowed quantity for a product is 1',
            'quantity.max' => 'Sory ! Maximun allowed quantity for a product is 100'
        ];
    }
}

