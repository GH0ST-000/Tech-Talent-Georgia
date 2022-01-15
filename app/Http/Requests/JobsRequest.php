<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_name'=>'required|string',
            'salary'=>'required|integer',
            'tags'=>'required|string',
            'fields'=>'required|string',
            'location'=>'required|string',
            'short_description'=>'required|string',
            'long_description'=>'required|string',
            'seniority'=>'required|string',
            'category'=>'required|string',
            'commitment'=>'required|string'
        ];
    }
}
