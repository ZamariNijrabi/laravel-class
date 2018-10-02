<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'             => 'required|min:3|max:50',
            'address'          => 'required|max:255',
            'phone'            => 'required|regex:/[07]{2}\d{8}/|min:10|max:10',
            'email'            => 'required|email',
            'license_number'   => 'required|min:6',
            'established_date' => 'required'
        ];
    }
}
