@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.applicationModule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.application-modules.update", [$applicationModule->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.applicationModule.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $applicationModule->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicationModule.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.applicationModule.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $applicationModule->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicationModule.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="maturity">{{ trans('cruds.maturity.maturity') }}</label>
                <input class="form-control {{ $errors->has('maturity') ? 'is-invalid' : '' }}" type="number" min="0" max="5" name="maturity" id="maturity" value="{{ old('maturity', $applicationModule->maturity) }}" required>
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

@section('scripts')
<script>
$(document).ready(function () {

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: []
      }
    );
  }

  $(".select2-free").select2({
        placeholder: "{{ trans('global.pleaseSelect') }}",
        allowClear: true,
        tags: true
    }) 

});
</script>
@endsection