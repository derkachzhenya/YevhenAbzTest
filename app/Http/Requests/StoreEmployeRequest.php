<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'image' => 'nullable|required|file|mimes:jpeg,png|dimensions:min_width=300,min_height=300|max:5120',
            'firstName' => 'required|string|min:2|max:256',
            'number' => 'required|regex:/^\+380\d{3}\d{2}\d{2}\d{2}$/',
            'mail' => 'required|email',
            'position_id' => 'required',
            'salary' => 'required|numeric|max:500',
            'head' => 'required',
            'created_at' => 'required',
            'admin_updated_id' => '',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'File format jpg, png up to 5MB, the minimum size of 300x300px',
            'image.file' => 'File format jpg, png up to 5MB, the minimum size of 300x300px',
            'image.mimes' => 'File format jpg, png up to 5MB, the minimum size of 300x300px',
            'image.dimensions' => 'File format jpg, png up to 5MB, the minimum size of 300x300px',
            'image.max' => 'File format jpg, png up to 5MB, the minimum size of 300x300px',

        ];
    }
}
