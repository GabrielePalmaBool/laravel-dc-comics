<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsFormRequest extends FormRequest
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
            'titolo' => 'required|string|min:2|max:10',
            'casa_editrice' => 'required|string|min:5|max:20',
            'genere' => 'required|string|min:2|max:15',
            'data_pubblicazione' => 'required',
            'prezzo' => 'required',
        ];
    }

    public function messages() {
        return [
            'titolo.required' => 'Il campo:titolo è vuoto',
            'titolo.string' => 'Il campo:titolo non è una stringa',
            'titolo.min' => 'Il campo:titolo non può essere minore di 3 caratteri',
            'titolo.max' => 'Il campo:titolo non può essere maggiore di 10 caratteri',
            'casa_editrice.required' => 'Il campo:Casa editrice è vuoto',
            'casa_editrice.string' => 'Il campo:Casa editrice non è una stringa',
            'casa_editrice.min' => 'Il campo:Casa editrice non può essere minore di 3 caratteri',
            'casa_editrice.max' => 'Il campo:Casa editrice non può essere maggiore di 10 caratteri',
            'genere.required' => 'Il campo:genere è vuoto',
            'genere.string' => 'Il campo:genere non è una stringa',
            'genere.min' => 'Il campo:genere non può essere minore di 3 caratteri',
            'genere.max' => 'Il campo:genere non può essere maggiore di 10 caratteri',
            'data_pubblicazione.required' => 'Il campo:data pubblicazione è vuoto',
            'prezzo.required' => 'Il campo:prezzo è vuoto',
        ];
    }
}
