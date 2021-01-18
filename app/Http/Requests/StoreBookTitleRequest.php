<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookTitleRequest extends FormRequest
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
        $rules = [
            'name' => 'required|min:2',
            'author' => 'required|min:2',
            'description' => 'required|min:2',
            'released_date' => 'required|date',
            'thumbnail' => 'file',
            'genres' => 'required|array|min:1',
        ];

        if ($this->isMethod('POST')) {
            $rules['thumbnail'] .= '|required';
            $rules['books_amount'] = 'required|min:0';
        }

        return $rules;
    }
}
