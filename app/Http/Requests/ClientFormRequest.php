<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
        public function rules()
    {
        $rules = [
            'fname'=>[
                'required',
            ],
            'lname'=>[
                'required',
            ],
            'contact'=>[
                'required',
            ],
            'email'=>[
                'required'
            ],
            'gender'=>[
                'required'
            ],
            'year'=>[
                'required',
            ],
            'month'=>[
                'required',
            ],
            'date'=>[
                'required',
            ],
            'strno'=>[
                'required',
            ],
            'stradd'=>[
                'required',
            ],
            'city'=>[
                'required',
            ],
            'status'=>[
                'nullable'
            ],

        ];

        return $rules;
    }
}
