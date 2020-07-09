<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductStoreRequest extends FormRequest
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
            'name' => 'bail|required|min:6|unique:category_products,name',
            'slug' => 'bail|required|min:6|unique:category_products,slug',
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Name is required',
            'name.min'       => 'Name is at least 6 characters long',
            'name.unique'    => 'Name already exists',
            'slug.required'  => 'Slug is required',
            'slug.min'       => 'Slug is at least 6 characters long',
            'slug.unique'    => 'Slug already exists',
        ];     
    }
}
