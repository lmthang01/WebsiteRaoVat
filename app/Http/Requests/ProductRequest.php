<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products,name,'.$this->id."|max:255",
            'description' => 'required',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên sản phẩm đã tồn tại!',
            'name.required' => 'Tên sản phẩm không được để trống!',
            'category_id.required' => 'Danh mục không được để trống!',
            'description.required' => 'Mô tả không được để trống!',
        ];
    }
}
