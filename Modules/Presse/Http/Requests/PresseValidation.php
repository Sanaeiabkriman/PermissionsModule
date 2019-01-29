<?php

namespace Modules\Presse\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresseValidation extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre'=>'required|max:100',
            'date'=>'required',
            'lien'=>'required|max:100',
            'media'=>'required|max:30',
            'image'=>'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
