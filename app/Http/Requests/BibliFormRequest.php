<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BibliFormRequest extends FormRequest
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
          'title' => 'bail|required|min:3',
          'resume' => 'required|min:5',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
    {
    return [
        'title.required' => 'A title is required',
        'title.min' => ' characts :min thank you',
        'resume.required'  => 'A message is required',
        'resume.min' => 'characts :min thank you',
         ];
    }
}
