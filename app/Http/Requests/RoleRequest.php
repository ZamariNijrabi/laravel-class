<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RoleRequest extends FormRequest
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
        info($this->role);
        switch (Request::method())
        {

            case 'POST':
                return [
                    'name' => 'required|max:255|unique:roles',
                ];
                break;
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|max:255|unique:users,name,' . $this->name,
                ];
                break;
            default :
                return [
                    'name' => 'required|max:255|unique:roles',
                ];
        }
    }
}
