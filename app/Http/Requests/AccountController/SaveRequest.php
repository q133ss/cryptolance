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
        if(Auth()->user()->avatar){
            return [
                'name' => 'required|string',
                'lastname' => 'required|string',
                'login' => 'required',
                'speciality' => 'required|string|max:255',
                'about' => 'required|string',
                'lang' => 'string',
                'currency' => 'string',
                'banner' => 'file'
            ];
        }else {
            return [
                'avatar' => 'required',
                'name' => 'required|string',
                'lastname' => 'required|string',
                'login' => 'required',
                'speciality' => 'required|string|max:255',
                'about' => 'required|string',
                'lang' => 'string',
                'currency' => 'string',
                'banner' => 'file'
            ];
        }
    }
}
