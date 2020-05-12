<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required|max:60',
            'description' => 'required|max:60',
            'status' => 'required|max:60',
            'time_estime' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'members_id' => 'required',
            'customers_id' => 'required',
        ];
    }
}
