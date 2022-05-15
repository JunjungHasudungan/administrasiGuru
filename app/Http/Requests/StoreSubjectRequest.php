<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject_code'  => 'required',
            'name'          => 'required',
            'teacher_id'    => 'required',
            'classrooms.*'  => 'integer',
            'classrooms'    => ['required', 'array'],
            'majors.*'  => 'integer',
            'majors'    => ['required', 'array'], 

        ];
    }
}
