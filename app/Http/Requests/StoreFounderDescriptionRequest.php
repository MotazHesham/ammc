<?php

namespace App\Http\Requests;

use App\Models\FounderDescription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFounderDescriptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('founder_description_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
