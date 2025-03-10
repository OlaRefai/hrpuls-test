<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Return true to allow all users to make this request.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:employees,email',
            'address' => 'nullable|string|max:255',
            'jobtitle' => 'nullable|string|max:255',
        ];
    }
}