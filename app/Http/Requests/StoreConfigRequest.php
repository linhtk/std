<?php

namespace SundaySim\Http\Requests;

use SundaySim\Http\Requests\Request;

class StoreConfigRequest extends Request
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
            'pageTitle' => ['required'],
            'footerContent' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'fax' => ['required'],
            'email' => ['required'],
            'map' => ['required']
        ];
    }
}
