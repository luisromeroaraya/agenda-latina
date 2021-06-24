<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'address' => 'required',
            'description' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'url' => 'required',
            'img_src' => 'required'
        ];
    }
}
