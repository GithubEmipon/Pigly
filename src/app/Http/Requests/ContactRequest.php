<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'date' => 'required',
            'weight' => 'required | integer |digits_between:4 |decimal:1' ,
            'calories' => 'required | integer',
            'exercise_time' => 'required',
            'exercise_content' => 'required | max:120',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '日付を入力してください',
            'weight.required' => '体重を入力してください',
            'weight.integer' => '数字で入力してください',
            'digits_between:4' => '4桁までの数字を入力してください',
            'decimal:1' => '小数点は１桁で入力してください',
            'calories.required' => '摂取カロリーを入力してください',
            'calories.integer' => '数字で入力してください',
            'exercise_time.required' => '運動時間を入力してください',
            'exercise_content.required' => '120文字以内で入力してください'
        ];
    }
}
