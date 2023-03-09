<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertystep1Request extends FormRequest
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
            'name'=>['required', 'string'],
            'description'=>['required', 'string'],
            'content'=>['required', 'string'],
            'square'=>['required', 'string'],
            'square_construction'=>['required', 'string'],
            'number_floor'=>['required', 'string'],
            'number_bedroom'=>['required', 'string'],
            'number_bathroom'=>['required', 'string'],
            'number_wc'=>['required', 'string'],
            'construction_year'=>['nullable', 'string'],
            'last_reconstruction'=>['nullable', 'string'],
            'last_renovation'=>['nullable', 'string'],
            'available_date'=>['nullable', 'string'],
            'price'=>['nullable', 'string'],
            'currency_id'=>['nullable', 'string'],
        ];
    }
}
