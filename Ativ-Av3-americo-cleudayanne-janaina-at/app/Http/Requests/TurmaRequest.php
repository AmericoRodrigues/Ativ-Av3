<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest
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
        //nome do input
            'name' => 'required|unique:Turmas',
            
            
            
        ];
    }

    public function messages(){
        return[
        'name.required' => 'o campo nome é Obrigatorio!!',
        'name.min' => 'preciso de 4 ou mais caracter!!',
        'name.unique' => 'Este nome ja se encontra em nossa base de dados!!!',
        
        
        


        

        ];
    }
}
