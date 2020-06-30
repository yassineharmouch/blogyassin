<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cvRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|min:3',
            'prenom' => 'required|min:10|max:30',
            'address' => 'required|min:3',
            'filiere' => 'required|min:10|max:200',
            'niveau' => 'required|min:3',
            'description' => 'required|min:10',
            'file' => 'required|mines:pdf,docx',
        ];
    }
}
