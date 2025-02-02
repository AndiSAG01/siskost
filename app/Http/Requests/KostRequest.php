<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KostRequest extends FormRequest
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
            "room" => 'required|string|',
            "description" => 'required|string',
            "price_month" => 'required|string',
            "price_years" => 'required|string',
            "status" => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|',
        ];
    }
}
