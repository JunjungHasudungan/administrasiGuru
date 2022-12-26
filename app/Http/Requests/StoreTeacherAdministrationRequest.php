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
            'subject_title'         => ['required','string'], 
        ];
    }
}
