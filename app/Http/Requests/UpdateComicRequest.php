<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'=> 'required|max:200',
            'description'=> 'nullable|max:4096',
            'thumb'=> 'nullable|max:1023|url',
            'price'=> 'required|numeric|min:1|max:3000',
            'series'=> 'nullable|max:200',
            'sale_date'=> 'nullable|date',
            'type'=> 'required|max:200',
            'artists'=> 'required',
            'writers'=> 'required',
        ];
    }
}
