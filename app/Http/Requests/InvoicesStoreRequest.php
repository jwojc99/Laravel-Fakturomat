<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesStoreRequest extends FormRequest
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
    public function rules() //to samo o w wklejaliśmy w $request->validate w kontrolerze
    {
        return [
            'number'=>'required',
            'date'=>'required|date',
            'total'=>'required|numeric',
            'customer'=>'required|integer'
        ];
    }
}
