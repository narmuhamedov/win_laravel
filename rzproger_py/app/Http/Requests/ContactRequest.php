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
            'name'=> 'required',
            'email'=>'required',
            'subject'=>'required|min:5|max:10',
            'message'=>'required|min:15|max:200'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Поле имя обязательно для заполнения',
            'email.required'=>'Поле почта обязательна для заполнения'
        ];
    }
}
