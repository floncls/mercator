<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOperationRequest;
use App\Http\Requests\StoreOperationRequest;
use App\Http\Requests\UpdateOperationRequest;
use App\Operation;
use App\Task;
use App\Activity;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OperationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('operation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $operations = Operation::all()->sortBy('name');

        return view('admin.operations.index', compact('operations'));
    }

    public function create()
    {
        abort_if(Gate::denies('operation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $actors = Actor::all()->sortBy('name')->pluck('name', 'id');
        $tasks = Task::all()->sortBy('nom')->pluck('nom', 'id');
        $activities = Activity::all()->sortBy('name')->pluck('name', 'id');

        return view('admin.operations.create', compact('actors', 'tasks', 'activities'));
    }

    public function store(StoreOperationRequest $request)
    {
        $operation = Operation::create($request->all());
        $operation->actors()->sync($request->input('actors', []));
        $operation->tasks()->sync($request->input('tasks', []));
        $operation->operationsActivities()->sync($request->input('activities', []));

        return redirect()->route('admin.operations.index');
    }

    public function edit(Operation $operation)
    {
        abort_if(Gate::denies('operation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $actors = Actor::all()->sortBy('name')->pluck('name', 'id');
        $tasks = Task::all()->sortBy('nom')->pluck('nom', 'id');
        $activities = Activity::all()->sortBy('name')->pluck('name', 'id');

        $operation->load('actors', 'tasks', 'operationsActivities');

        return view('admin.operations.edit', compact('actors', 'tasks', 'operation', 'activities'));
    }

    public function update(UpdateOperationRequest $request, Operation $operation)
    {
        $operation->update($request->all());
        $operation->actors()->sync($request->input('actors', []));
        $operation->tasks()->sync($request->input('tasks', []));
        $operation->operationsActivities()->sync($request->input('activities', []));

        return redirect()->route('admin.operations.index');
    }

    public function show(Operation $operation)
    {
        abort_if(Gate::denies('operation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $operation->load('actors', 'tasks', 'operationsActivities');

        return view('admin.operations.show', compact('operation'));
    }

    public function destroy(Operation $operation)
    {
        abort_if(Gate::denies('operation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $operation->delete();

        return back();
    }

    public function massDestroy(MassDestroyOperationRequest $request)
    {
        Operation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

}
