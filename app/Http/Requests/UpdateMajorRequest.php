<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMajorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'major_code'            => 'required',
            'title'                  =>'required:string',
            'headOfDepartement'     => 'required',
        ];
    }
}
