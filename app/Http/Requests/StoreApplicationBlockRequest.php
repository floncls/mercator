<?php

namespace App\Http\Requests;

use App\ApplicationBlock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreApplicationBlockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('application_block_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'min:3',
                'max:32',
                'required',
                'unique:application_blocks',
            ],
        ];
    }
}
