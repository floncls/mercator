<?php

namespace App\Http\Requests;

use App\LogicalServer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLogicalServerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('logical_server_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:logical_servers,id',
        ];
    }
}
