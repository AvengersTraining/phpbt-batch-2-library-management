<?php

namespace App\Http\Requests;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'citizen_id' => 'required|regex:/^\d{1,20}$/|unique:users,citizen_id',
            'first_name' => 'required|alpha|max:255',
            'last_name' => 'required|alpha|max:255',
            'phone' => ['required', new Phone],
            'email' => 'required|email:rfc|string|unique:users,email|max:255',
            'address' => 'required|string|max:255',
        ];
    }
}
