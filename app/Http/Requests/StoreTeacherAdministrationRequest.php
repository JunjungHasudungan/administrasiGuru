<?php

namespace App\Http\Requests;

use App\Helpers\Completeness;
use App\Helpers\Method;
use App\Helpers\StatusCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeacherAdministrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'teacher_id'            => ['required', 'array'],
            'learning_method'       => ['required', Rule::in(Method::Method_Learning)],     
            'subject_title'         => ['required', 'string'], 
            'subject_id'            => ['required', 'array'],
            'classroom_id'          => ['required', 'array'],
            'status'                => ['required', Rule::in(StatusCheck::ADMINISTRATION_STATUS)],
            'completeness'          => ['required', Rule::in(Completeness::Completeness)], 
        ];
    }
}
