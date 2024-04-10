<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduitsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category'=> 'required|string',
            'serialnumber' => 'required|string',
            'user' => 'required|string',
            'lieu' => 'required|string',
            'fournisseur' => 'required|string',
            'achat' => 'required|string',
            'etat' => 'required|string',
        ];
    }
}
