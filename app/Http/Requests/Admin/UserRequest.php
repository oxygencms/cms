<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $key = $this->isMethod('POST') ? '' : $this->user->id;

        $rules = [
            'active' => 'required|boolean',
            'roles' => 'array|distinct',
            'name' => 'required|string',
            'email' => "required|email|unique:users,email,$key",
            'phone' => "nullable|string|regex:/^[0-9- ]+$/u",
        ];

        return $rules;
    }
}
