<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adultRequest extends FormRequest
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
        //dd('test');
        return [
            'gender'    => 'required',
            'height'    => 'required',
            'weight'    => 'required|int',
            'age'       => 'required|int',

        ];
    }

    public function messages() {
    //dd('hbgfhgr');
        return [
            'gender.required'   => 'Bitte Geschlecht auswählen!',
            'height.required'   => 'Körpergrösse wird benötigt!',
            'height.max'        => 'Körpergrösse muss logisch sein!',
            'height.min'        => 'Körpergrösse darf nicht nur eine Zahl sein!',
            'weight.int'        => 'Gewicht muss eine Zahl sein!',
            'weight.required'   => 'Gewicht wird benötigt!',
            'weight.max'        => 'Gewicht muss logisch sein!',
            'weight.min'        => 'Gewicht darf nicht nur eine Zahl sein!',
            'age.required'      => 'Alter wird benötigt!',
            'age.max'           => 'Alter muss logisch sein!',
            'age.min'           => 'Alter darf nicht nur eine Zahl sein!',
            'age.int'           => 'Alter muss eine Zahl sein!',
        ];
    }
}
