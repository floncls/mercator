@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.actor.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.actors.update", [$actor->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.actor.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $actor->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.actor.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="contact">{{ trans('cruds.actor.fields.contact') }}</label>
                <input class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" type="text" name="contact" id="contact" value="{{ old('contact', $actor->contact) }}">
                @if($errors->has('contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.actor.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="nature">{{ trans('cruds.actor.fields.nature') }}</label>
                <input class="form-control {{ $errors->has('nature') ? 'is-invalid' : '' }}" type="text" name="nature" id="nature" value="{{ old('nature', $actor->nature) }}">
                @if($errors->has('nature'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nature') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.actor.fields.nature_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="type">{{ trans('cruds.actor.fields.type') }}</label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', $actor->type) }}">
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.actor.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="maturity">{{ trans('cruds.maturity.maturity') }}</label>
                <input class="form-control {{ $errors->has('maturity') ? 'is-invalid' : '' }}" type="number" min="0" max="5" name="maturity" id="maturity" value="{{ old('maturity', $actor->maturity) }}" required>
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