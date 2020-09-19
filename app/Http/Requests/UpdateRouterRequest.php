<?php

namespace App\Http\Requests;

use App\Router;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRouterRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('router_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'min:3',
                'max:32',
                'required',
                'unique:routers,name,' . request()->route('router')->id,
            ],
        ];
    }
}
