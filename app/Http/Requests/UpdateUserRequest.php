<?php

namespace App\Http\Requests;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'phone' => ['required', new Phone],
            'email' => ['required', 'max:255', 'email', Rule::unique('users', 'email')->ignore($this->user->id)],
            'address' => 'required|string|max:255',
            'password' => 'nullable|min:8|max:255',
            're_password' => 'same:password',
        ];
    }
}
