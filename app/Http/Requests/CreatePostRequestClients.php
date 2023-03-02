<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequestClients extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "Société" => "required",
            "Téléphone" => "required|numeric",
            "Email" => "required",
            "Adresse" => "required",
            "TVA" => "required",
            "Factures" => "required",
            "created_at" => "required",
            "updated_at" => "required",
        ];
    }

    public function messages(): array
    {
        return [
            "Société.required" => "La société est obligatoire",
            "Téléphone.required" => "Le téléphone est obligatoire",
            "Téléphone.numeric" => "Le téléphone doit être un nombre",
            "Email.required" => "L'email est obligatoire",
            "Adresse.required" => "L'adresse est obligatoire",
            "TVA.required" => "La TVA est obligatoire",
            "Factures.required" => "Les factures sont obligatoires",
        ];
    }
}
