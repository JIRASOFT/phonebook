<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PhonebookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:10',
            'email' => 'required|email|unique:phonebooks,email,'.$request->id
        ];
    }
}
