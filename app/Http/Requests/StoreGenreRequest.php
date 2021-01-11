<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGenreRequest extends FormRequest
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
        $ignoreId = $this->isMethod('PUT') ? $this->genre->id : null;

        return [
            'name' => ['required', 'min:2', Rule::unique('genres')->ignore($ignoreId)],
            'description' => 'required|min:2',
        ];
    }
}
