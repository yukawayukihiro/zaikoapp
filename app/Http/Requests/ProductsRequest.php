<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_id' => 'required',
            'product_name' => 'required',
            'price' => 'numeric|between:0,10000',
            'stock' => 'numeric|between:0,10000',
            'comment' => 'required',
        ];
    }

    public function messages () {
        return [
            'company_id.required' => '商品IDは必ず入力してください。',
            'product_name.required' => '商品名は必ず入力してください。',
            'price.numeric' => '値段は整数で入力してください。',
            'price.between' => '値段は0~10000の間で入力して下さい。',
            'stock.numeric' => '在庫数は整数で入力してください。',
            'stock.between' => '在庫数は0~10000の間で入力してください。',
            'comment.required' => '商品情報コメントは必ず入力してください。',
        ];
    }
}
