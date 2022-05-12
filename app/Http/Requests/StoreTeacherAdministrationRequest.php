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
            // 'teacher_id'            => ['required', 'integer'],
            // 'learning_method'       => ['required'],     
            'subject_title'         => ['required','string'], 
            // 'subject_id'            => ['required', 'integer'],
            // 'classroom_id'          => ['required', 'integer'],
            // 'status'                => ['required'],
            // 'completeness'          => ['required'], 
            // 'note'                  => 'nullable'
        ];
    }
}
