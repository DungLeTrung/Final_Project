<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'new_password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'new_password.required' => 'The password field is required.',
            'new_password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
