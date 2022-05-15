<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMajorRequest extends FormRequest
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
            'major_code'                => 'required',
            'title'                     =>'required:string',
            'head_of_departement'       => 'required',
            'teachers.*'                => 'integer',
            'teachers'                  => ['required', 'array']
        ];
    }
}
