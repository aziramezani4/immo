<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePropertyRequest extends FormRequest
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
            'type'=>['required'],
            'category_id'=>['required', 'string', Rule::exists('re_categories', 'id')],
            'country_id'=>['required', 'string', Rule::exists('countries', 'id')],
            'state_id'=>['nullable', 'string', Rule::exists('states', 'id')],
            'city_id'=>['nullable', 'string', Rule::exists('cities', 'id')],
            'location'=>['required', 'string'],
        ];
    }
}
