<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyRequest extends FormRequest
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
            'reply' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'reply.required' => 'コメントへの返信を入力してください',
            'reply.max' => 'コメントへの返信は255文字以下で入力してください',
        ];
    }
}
