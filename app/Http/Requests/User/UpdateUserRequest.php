<?php

namespace App\Http\Requests\User;

use App\Http\User;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this role only in update requests
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //create middleware from kernel at here
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
            'name' => [
                'required', 'string', 'max:255'
            ],
            'email' => [
                //rule unique id only work for other record id
                'required', 'email', 'max:255', Rule::unique('users')->ignore($this->user)
            ],
            'password' => [
                'min:8', 'string', 'max:255', 'mixedcase'
            ],
            //add validation for role this here
        ];
    }
}
