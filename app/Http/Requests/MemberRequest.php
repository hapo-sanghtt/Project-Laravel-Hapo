<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'image' => 'sometimes|image|max:5000',
            'name' => 'required|max:60',
            'gender' => 'required|max:60',
            'email' => 'required|max:60',
            'phone' => 'required|max:120',
            'address' => 'required',
            'password' => 'required|confirmed',
            'role' => 'required',
            'projects_id' => 'required',
        ];
    }
}
