<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proyectorequest extends FormRequest
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
            'nombre'=>'required|max:20',
            'titulo'=>'required|max:40',
            'fechainicio' => 'required|date',
            'fechafin' => 'required|date|after:fechainicio',
            'horasestimadas'=>'required|numeric',
            'empleado_id'=>'required'
        ];
    }
}
