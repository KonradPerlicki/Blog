<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3',
            'background_image' => 'required|image|mimes:jpg,jpeg,png',
            'read_time' => 'required',
            'content' => 'required|min:3',
            'gallery' => 'nullable',
            'tags' => 'required',
            'category_id' => 'required'
        ];
    }
}
