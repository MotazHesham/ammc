<?php

namespace App\Http\Requests;

use App\Models\AboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_edit');
    }

    public function rules()
    {
        return [
            'about_us_1' => [
                'required',
            ],
            'about_us_2' => [
                'required',
            ],
            'about_us_3' => [
                'required',
            ],
            'about_us_photo' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'client_text' => [
                'required',
            ],
            'success_text' => [
                'required',
            ],
            'task_text' => [
                'required',
            ],
            'email_1' => [
                'required',
            ],
            'phone_1' => [
                'string',
                'required',
            ],
            'phone_2' => [
                'string',
                'nullable',
            ],
            'address' => [
                'required',
            ],
            'time' => [
                'required',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'instegram' => [
                'string',
                'nullable',
            ],
            'youtube' => [
                'string',
                'nullable',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'contact_text' => [
                'required',
            ],
            'latitude' => [
                'string',
                'required',
            ],
            'longitude' => [
                'string',
                'required',
            ],
            'manager_name' => [
                'string',
                'required',
            ],
            'manager_photo' => [
                'required',
            ],
        ];
    }
}
