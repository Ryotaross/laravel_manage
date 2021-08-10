<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            //
            'date' => 'required',
            'time' => 'required|max:50',
            'content' => 'required|max:500',
            'equip' => 'required|max:500',
            'impact' => 'required|max:500',
            'thing' => 'required|max:500',
            'other' => 'required|max:500',
        ];
    }

    public function attributes()
    {
        return[
            'date' => '日付',
            'time' => '時間',
            'content' => '内容',
            'equip' => '装置',
            'impact' => '影響',
            'thing' => 'もの',
            'other' => 'その他',
        ];
    }
}
