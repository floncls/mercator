@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.man.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.mans.update", [$man->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.man.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $man->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.man.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lans">{{ trans('cruds.man.fields.lans') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('lans') ? 'is-invalid' : '' }}" name="lans[]" id="lans" multiple>
                    @foreach($lans as $id => $lans)
                        <option value="{{ $id }}" {{ (in_array($id, old('lans', [])) || $man->lans->contains($id)) ? 'selected' : '' }}>{{ $lans }}</option>
                    @endforeach
                </select>
                @if($errors->has('lans'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lans') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.man.fields.lans_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="maturity">{{ trans('cruds.maturity.maturity') }}</label>
                <input class="form-control {{ $errors->has('maturity') ? 'is-invalid' : '' }}" type="number" min="0" max="5" name="maturity" id="maturity" value="{{ old('maturity', $man->maturity) }}">
                @if($errors->has('maturity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('maturity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.maturity.maturity_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection