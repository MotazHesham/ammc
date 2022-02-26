<?php

namespace App\Http\Requests;

use App\Models\FounderInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFounderInfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('founder_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:founder_infos,id',
        ];
    }
}
