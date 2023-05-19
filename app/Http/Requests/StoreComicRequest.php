<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable|max:65535',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'nullable|max:20',
            'type' => [
                'required',
                Rule::in(['comic-book', 'graphic-novel'])
            ]
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'il titolo è un campo obbligatorio',
            'title.max' => 'il titolo deve avere al massimo :max caratteri',
            'description.max' => 'la descizione deve avere al massimo :max caratteri',
            'thumb.max' => 'la URL dell\' immagine deve avere al massimo :max caratteri',
            'price.max' => 'il prezzo deve avere al massimo :max caratteri',
            'series.required' => 'la serie è un campo obbligatorio',
            'series.max' => 'la serie deve avere al massimo :max caratteri',
            'sale_date.max' => 'la data di uscita deve avere al massimo :max caratteri',
            'type.required' => 'il genere è un campo obbligatorio',
            'type.in' => 'Valore fornito non valido!'
        ];
    }
}
