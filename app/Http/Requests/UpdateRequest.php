<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
                'FirstName'=>'required|alpha|min:3',
                'LastName'=>'required|alpha|min:3',
                'DateOfBirth'=>'required|before:today',
                'Gender'=>'required',
                'Email'=>'required|email',
                'ContactNumber'=>'required|numeric|regex:/(07)[0-9]{8}/',
                'password'=>'nullable|confirmed|min:8'
            ];
        
    }
}
