<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'category'=>'required',
            'subcategory'=>'required|max:20|unique:sub_categories,name',
        ];
    }
    public function messages(){
        return [
            'category.required'=>'Please chose a category!',
            'subname.required'=>'Please enter sub category name!',
            'subcategory.max'=>'Sub category name must not less than 20 character!',
            'subcategory.unique'=>'Sub category name already exist!',

        ];
    }
}
