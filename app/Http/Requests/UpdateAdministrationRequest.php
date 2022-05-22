<?php

namespace App\Http\Requests;

use App\Helpers\Completeness;
use App\Helpers\StatusCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateAdministrationRequest extends FormRequest
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
