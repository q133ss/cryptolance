<?php

namespace App\Http\Requests\AccountController;

use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'avatar' => 'file',
            'name' => 'required|string',
            'lastname' => 'required|string',
            'about' => 'required|string',
            'lang' => 'string',
            'currency' => 'string'
        ];
    }
}
