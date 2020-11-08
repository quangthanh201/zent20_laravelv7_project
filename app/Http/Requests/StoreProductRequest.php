<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:1|max:255',
            'category_id' => 'required',
            'author_id' => 'required',
            'publishing_company_id' => 'required',
            'sale_price' => 'required|min:0',
            'origin_price' => 'required|min:sale_price',
            'discount_percent' => '',
            'content' => 'required|min:5|max:255',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống!',
            'min' => ':attribute không được nhỏ hơn :min',
            'max' => ':attribute không được lớn hơn :max',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên sản phẩm',
            'category_id' => 'Danh mục',
            'author_id' => 'Tác giả',
            'publishing_company_id' => 'Nhà xuất bản',
            'origin_price' => 'Giá gốc',
            'sale_price' => 'Giá khuyễn mãi',
            'content' => 'Mô tả',
            'status' => 'Trạng thái'
        ];
    }
}