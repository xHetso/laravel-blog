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
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required'
        ];
    }

    public function attributes(){
        return[
            'name' => 'имя'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Поле имя является обязательным',
            'email.email' => 'Поле email является обязательным',
            'subject.required' => 'Поле subject является обязательным',
            'message.required' => 'Поле message является обязательным'
        ];
    }
}
