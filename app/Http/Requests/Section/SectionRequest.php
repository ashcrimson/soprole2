<?php

namespace App\Http\Requests\Section;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
            'layout' => 'required',
            'nombre' => 'required',
            'imagen_web' => [
                'required',
                'mimes:png,jpg,jpeg',
                // 'dimensions:min_width=520,min_height=385,max_width=2000,max_height=1500'
            ],
            'imagen_mobile' => [
                'required',
                'mimes:png,jpg,jpeg',
                // 'dimensions:min_width=520,min_height=385,max_width=2000,max_height=1500'
            ],
            'item_left'  => 'required_if:layout,==,2',
            'item_right' => 'required_if:layout,==,2',
            'texto'      => 'required_if:item_izquierda,==,1|required_if:item_derecha,==,1',
            'slider'     => 'required_if:item_izquierda,==,2|required_if:item_derecha,==,2',
            'video'      => 'required_if:item_izquierda,==,3|required_if:item_derecha,==,3',
            'documentos' => 'required_if:item_izquierda,==,4|required_if:item_derecha,==,4',
            'orden'      => 'required'
        ];
    }

    public function messages()
    {
        return [
            'item_left.required_if'  => 'Debe seleccionar un item para la columna izquierda.',
            'item_right.required_if' => 'Debe seleccionar un item para la columna derecha.',
            'texto.required_if'      => 'El item texto es requerido.',
            'slider.required_if'     => 'El item slider es requerido.',
            'video.required_if'      => 'El item video es requerido.',
            'documents.required_if'  => 'El item documentos es requerido.',
        ];
    }
}
