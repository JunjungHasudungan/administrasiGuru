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
            'name'                      => 'required',
            'email'                     => 'required','unique:users',
            'password'                  => 'required',
            'role_id'                   => 'required',
            'classroom_id'              => 'required',
            'is_status'                 => 'required',
            'major_id'                  => 'required',
            'student_address'           => 'optional',
            'student_licence_number'    => 'optional',
            'teacher_qualifications'    => 'optional',
            'teacher_major'             => 'optional',
            'head_Of_Departement'       => 'optional',
        ];
    }
}
