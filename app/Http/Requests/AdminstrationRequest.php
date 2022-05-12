<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminstrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'     => 'required',
            'classroom_id'   => 'required'
        ];
    }
}
