<?php

namespace App\Http\Requests;

use App\Helpers\Completeness;
use App\Helpers\StatusCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminstrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'             => 'required',
            'teacher_id'        => 'required',
            'classroom_id'      => 'required',
            'subject_id'        => 'required',
            'method'            => 'required',
            'completeness'      => 'required',
            'statusCheck'       => ['optional', Rule::in(StatusCheck::ADMINISTRATION_STATUS)], 
            'comment'           => 'optional'
        ];
    }
}
