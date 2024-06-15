<?php

namespace App\Http\Requests\Api\V1\User\Journey;

use App\Http\Requests\BaseApiRequest as FormRequest;

class UserLevelStarsRequest extends FormRequest
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
            'obtained_stars' => 'required|integer|min:0|max:5',
        ];
    }
}
