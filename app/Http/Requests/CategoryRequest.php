<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,gif',
        ];
    }


    public function messages(){
        return [
            'name.required' => 'Please enter category name!',
            'name.unique' => 'Category name already exist!',
            'image.required' => 'Please chose image for category!',
            'image.image' => 'Sory it\'s not an image'
        ];
    }
}
