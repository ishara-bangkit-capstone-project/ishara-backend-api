<?php

namespace App\Http\Requests\Api\V1\Admin\File;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFileRequest extends FormRequest
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
        $file_id = request()->route('id');

        return [
            'name' => [
                'required',
                'unique:files,name,' . $file_id,
                'string',
                'max:255',
            ],
            'description' => 'nullable|string|max:255',
            'file' => 'file|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ];
    }
}
