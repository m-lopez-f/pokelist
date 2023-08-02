<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePokemonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
            ],
            'level' => [
                'required',
            ],
            'national_id' => [
                'required',
            ],
            'key' => [
                'required',
            ],
            'actual_ps' => [
                'required',
            ],
            'total_ps' => [
                'required',
            ],
            'base_attack' => [
                'required',
            ],
            'base_defense' => [
                'required',
            ],
            'base_special_attack' => [
                'required',
            ],
            'base_special_defense' => [
                'required',
            ],
            'base_speed' => [
                'required',
            ],
            'moves.*' => [
                'integer',
            ],
            'moves' => [
                'required',
                'array',
            ],
            'type.*' => [
                'integer',
            ],
            'type' => [
                'required',
                'array',
            ],
        ];
    }
}
