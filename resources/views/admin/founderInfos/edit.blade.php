@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.founderInfo.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.founder-infos.update", [$founderInfo->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('title_1') ? 'has-error' : '' }}">
                            <label class="required" for="title_1">{{ trans('cruds.founderInfo.fields.title_1') }}</label>
                            <input class="form-control" type="text" name="title_1" id="title_1" value="{{ old('title_1', $founderInfo->title_1) }}" required>
                            @if($errors->has('title_1'))
                                <span class="help-block" role="alert">{{ $errors->first('title_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.title_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('title_2') ? 'has-error' : '' }}">
                            <label class="required" for="title_2">{{ trans('cruds.founderInfo.fields.title_2') }}</label>
                            <input class="form-control" type="text" name="title_2" id="title_2" value="{{ old('title_2', $founderInfo->title_2) }}" required>
                            @if($errors->has('title_2'))
                                <span class="help-block" role="alert">{{ $errors->first('title_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.title_2_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('national') ? 'has-error' : '' }}">
                            <label class="required" for="national">{{ trans('cruds.founderInfo.fields.national') }}</label>
                            <input class="form-control" type="text" name="national" id="national" value="{{ old('national', $founderInfo->national) }}" required>
                            @if($errors->has('national'))
                                <span class="help-block" role="alert">{{ $errors->first('national') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.national_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                            <label class="required" for="dob">{{ trans('cruds.founderInfo.fields.dob') }}</label>
                            <input class="form-control" type="text" name="dob" id="dob" value="{{ old('dob', $founderInfo->dob) }}" required>
                            @if($errors->has('dob'))
                                <span class="help-block" role="alert">{{ $errors->first('dob') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.dob_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label class="required" for="address">{{ trans('cruds.founderInfo.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $founderInfo->address) }}" required>
                            @if($errors->has('address'))
                                <span class="help-block" role="alert">{{ $errors->first('address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.founderInfo.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description">{{ old('description', $founderInfo->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.founderInfo.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection