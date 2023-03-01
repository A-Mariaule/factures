<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'Réf' => 'required',
            'Titre' => 'required',
            'Prix' => 'required|numeric',
            'TVA' => 'required|numeric',
            'Total' => 'required|numeric',
            'Client' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'Réf.required' => 'La référence est obligatoire',
            'Titre.required' => 'Le titre est obligatoire',
            'Prix.required' => 'Le prix est obligatoire',
            'Prix.numeric' => 'Le prix doit être un nombre',
            'TVA.required' => 'La TVA est obligatoire',
            'TVA.numeric' => 'La TVA doit être un nombre',
            'Total.required' => 'Le total est obligatoire',
            'Total.numeric' => 'Le total doit être un nombre',
            'Client.required' => 'Le client est obligatoire',
        ];
    }
}
