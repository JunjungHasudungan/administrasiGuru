<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
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
