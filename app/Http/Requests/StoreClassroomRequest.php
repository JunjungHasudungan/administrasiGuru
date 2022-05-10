<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code_classroom'        => 'required|string|max:15',
            'name_class'            => 'required|string', 
            'major_id'              => 'required',
            'teacher_id'            => 'required',
            'room_number'           => 'required',
            'description'           => 'nullable',
            // 'student'               => 'required', 'array'
        ];  
    }
}
