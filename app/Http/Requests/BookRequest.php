<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required',
            'pages' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'title.required'    =>'Digite o Titulo do livro!',
            'pages.required'    =>'Digite o número de paginas!',
            'pages.numeric'     => 'O campo de paginas deve conter um valor numérico!'
        ];
    }
}
