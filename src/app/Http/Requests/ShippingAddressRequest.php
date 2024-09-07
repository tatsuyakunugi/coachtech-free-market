<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingAddressRequest extends FormRequest
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
            'shipping_post_code' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'shipping_address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'shipping_post_code.required' => '郵便番号を入力してください',
            'shipping_post_code.regex' => '郵便番号は、半角数字3桁、半角ハイフン、半角数字4桁、の形式で入力してください。',
            'shipping_address.required' => '住所を入力してください',
        ];
    }
}
