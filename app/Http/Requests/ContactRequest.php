<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //autorizzo la request ad essere validata
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ //nel caso ci arrivano dati di tipo name, email, message, deve fare queste regole
            'name' => 'required|min:4|max:20',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|min:20|max:500'
        //required signifa che deve essere obbligatoria, le altre vengono divise da | (pipe)
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * return array
 */
public function messages()
{
    return [
        'name.required' => 'inserisci nome',
        'name.min'=>'inserisci almeno 4 caratteri',
        'name.max'=>'inserisci massimo 20 caratteri',
        'email.required'=> 'inserisci indirizzo email',
        'emai.email'=>'indirizzo email non valido',
        'message.required' => 'inserisci il messaggio',
        'message.min'=>'inserisci min 20 caratteri',
        'message.max'=>'inserisci massimo 500 caratteri'
    ];
}
}
