<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationStoreRequest extends FormRequest
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
            'title' => 'bail|required|unique:informations,title',
            'content' => 'bail|required'
        ];
    }

    public function messages(){
        return [
            'title.required'    => 'Tiêu đề không được trống',
            'title.unique'      => 'Tiêu đề đã tồn tại',
            'content.required' => 'Nội dung không được trống'
        ];
    }
}
