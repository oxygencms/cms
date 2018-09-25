<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PhraseRequest extends FormRequest
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
        $key = $this->isMethod('POST') ? '' : $this->phrase->id;

        $rules = [
            'group' => 'required|string',
            'key' => "required|string|unique:phrases,key,$key",

            'text' => 'array|distinct',
//            'text.*' => 'string',
        ];

        return $rules;
    }
}
