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
            'user_detail.required' => __('manage_borrowing.user_required'),
            'book_id.required' => __('manage_borrowing.order_book_required'),
            'date.*.required' => __('manage_borrowing.date_required'),
            'date.*.after:today' => __('manage_borrowing.date_after_today'),
        ];
    }
}
