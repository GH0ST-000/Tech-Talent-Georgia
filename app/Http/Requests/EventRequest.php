<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id'=>'required|integer',
            'company_name'=>'required|string',
            'company_logo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_link'=>'required|string',
            'short_description'=>'required|string',
            'long_description'=>'required|string'
        ];
    }
}
