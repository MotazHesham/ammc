<?php

namespace App\Http\Requests;

use App\Models\FounderInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFounderInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('founder_info_create');
    }

    public function rules()
    {
        return [
            'title_1' => [
                'string',
                'required',
            ],
            'title_2' => [
                'string',
                'required',
            ],
            'national' => [
                'string',
                'required',
            ],
            'dob' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
        ];
    }
}
