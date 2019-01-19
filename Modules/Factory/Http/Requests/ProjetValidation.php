<?php

namespace Modules\Factory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetValidation extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>'required|max:50',
            'description'=>'required|max:1000',
            'date'=>'required|max:50',
            'collaborateurs'=>'required',
            'clients'=>'required',
            'statut'=>'required',
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
