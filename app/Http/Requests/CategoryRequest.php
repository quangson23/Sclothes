<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'categories_name' => 'required|max:255',
        ];
    }


    public function messages(): array
    {
        return [
'categories_name.required' => 'Tên danh mục bắt buộc',
'categories_name.max' => 'Tên danh mục vượt quá 255 ký tự',


        ];
    }
}
