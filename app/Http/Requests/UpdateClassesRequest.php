<?php

namespace App\Http\Requests;

use App\Models\Major;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassesRequest extends FormRequest
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
            'code_class'            => 'required|max:25',
            'name'                  => 'required|string|max:25',
            'major_id.required'     => Major::find('id')
        ];
    }
}
