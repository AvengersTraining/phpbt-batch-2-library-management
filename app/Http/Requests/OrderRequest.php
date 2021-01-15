<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_detail' => 'required',
            'book_id' => 'required',
            'date.*' => 'required|date|after:today',
        ];
    }

    public function messages()
    {
        return [
            'user_detail.required' => 'User must be required!',
            'book_id.required' => 'Book must be required!',
            'date.*.required' => 'Return date must be required!',
            'date.*.after:today' => 'Return date must be after today!',
        ];
    }
}
