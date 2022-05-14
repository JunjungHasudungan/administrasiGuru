<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
            'classroom_id'      => 'required',
            'subject_id'        => 'required',
            'user_id'           => 'required',
            'method'            => 'required',
            'completeness'      => 'required',
        ];
    }
}
