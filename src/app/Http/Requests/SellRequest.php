<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'image' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'name' => 'required',
            'description' => 'required|max:255',
            'price' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => '画像を選択してください',
            'category.required' => 'カテゴリーを選択してください',
            'condition.required' => 'コンディションを選択してください',
            'name.required' => '商品名を入力してください',
            'description.required' => '商品の説明を入力してください',
            'description.max' => '商品の説明は225文字以内で入力してください',
            'price.required' => '商品価格を入力してください',
            'price.integer' => '商品価格は数字で入力してください',
            'price.min' => '商品価格は1円以上で設定してください',
        ];
    }
}
