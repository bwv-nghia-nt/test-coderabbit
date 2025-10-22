<?php

namespace App\Http\Requests\User;

use App\Libs\ConfigUtil;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => [
                'required',
                'string',
                'max:100',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
            ],
            'user_flag' => [
                'required',
                'integer',
            ],
        ];
    }

    /**
     * Validation error message
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required' => ConfigUtil::getMessage('ECL001', ['Name']),
            'name.max' => ConfigUtil::getMessage('ECL002', ['Name', '100']),
            'email.required' => ConfigUtil::getMessage('ECL001', ['Email']),
            'email.email' => ConfigUtil::getMessage('ECL003', ['Email']),
            'email.max' => ConfigUtil::getMessage('ECL002', ['Email', '255']),
            'email.unique' => ConfigUtil::getMessage('ECL004', ['Email']),
            'password.required' => ConfigUtil::getMessage('ECL001', ['Password']),
            'password.min' => ConfigUtil::getMessage('ECL005', ['Password', '8']),
            'user_flag.required' => ConfigUtil::getMessage('ECL001', ['User Flag']),
            'user_flag.integer' => ConfigUtil::getMessage('ECL006', ['User Flag'])
        ];
    }
}

