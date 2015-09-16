<?php

namespace apms\Http\Requests;

use apms\Http\Requests\Request;

class ApplicationFormRequest extends Request
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
            /*'fname'         => 'required',
            'mname'         => 'string',
            'lname'         => 'required',
            'age'           => 'required',
            'birthdate'     => 'required',
            'date_applied'  => 'required',
            'address'       => 'required',
            'contact_num'   => 'required',
            'email_add'     => 'required|email',
            'position_id'   => 'required'*/
        ];
    }
}
