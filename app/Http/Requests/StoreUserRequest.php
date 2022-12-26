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
            'classroom_id'              => 'nullable',
            'status'                    => 'required',
            'major_id'                  => 'nullable',
            'student_address'           => 'nullable',
            'student_licence_number'    => 'nullable',
            'teacher_qualifications'    => 'nullable',
            'teacher_major'             => 'nullable',
            'head_Of_Departement'       => 'nullable',
            'student_id.*'              => 'integer',
            'student_id'                => ['required', 'array'],
            'subject_id.*'              => 'integer',
            'subject_id'                => ['required', 'min: 8', 'max: 12', 'array'],
        ];
    }
}
