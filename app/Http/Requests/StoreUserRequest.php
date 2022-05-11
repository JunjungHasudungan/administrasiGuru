<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name'              => 'required',
            'email'             => 'required|unique',
            'password'          => 'required',
            'role_id'           => 'required',
            'classroom_id'      => 'required',
            'status'            => 'required'
        ];
    }
}
