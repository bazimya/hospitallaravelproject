<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|unique:',

        ];
    }
    //Add custom message if validation fails
    public function messages()
    {
        return [
            'phone.required' => 'Phone is required.',
            'phone.unique' => 'Phone number should be unique.',

        ];
    }
}
