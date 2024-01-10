<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255|unique:comics',
            'type' => 'required|max:50',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required|date_format:Y-m-d',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
            'title.unique' => 'Il titolo deve essere univoco',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo non può superare i :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie non può superare i :max caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'sale_date.date_format' => 'La data di vendita deve essere nel formato AAAA-MM-GG',
        ];
    }
}
