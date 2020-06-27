<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Empvalidate extends FormRequest
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
        'type' => 'required',
        'prefix' => 'required',
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email|unique:employees',
        'mobile' => 'required|min:10|numeric',
        'role' => 'required',
        'rmanager' => 'required',
        'department' => 'required',
        'designation' => 'required',
        'empgroup' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'martialstatus' => 'required',
        'nationality' => 'required',
        'blood' => 'required',
        'fathername' => 'required',
        'mothername' => 'required'
        ];
    }
}
