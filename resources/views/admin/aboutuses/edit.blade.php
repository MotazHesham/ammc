@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.aboutUs.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.aboutuses.update", [$aboutUs->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('about_us_1') ? 'has-error' : '' }}">
                            <label class="required" for="about_us_1">{{ trans('cruds.aboutUs.fields.about_us_1') }}</label>
                            <textarea class="form-control" name="about_us_1" id="about_us_1" required>{{ old('about_us_1', $aboutUs->about_us_1) }}</textarea>
                            @if($errors->has('about_us_1'))
                                <span class="help-block" role="alert">{{ $errors->first('about_us_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('about_us_2') ? 'has-error' : '' }}">
                            <label class="required" for="about_us_2">{{ trans('cruds.aboutUs.fields.about_us_2') }}</label>
                            <textarea class="form-control" name="about_us_2" id="about_us_2" required>{{ old('about_us_2', $aboutUs->about_us_2) }}</textarea>
                            @if($errors->has('about_us_2'))
                                <span class="help-block" role="alert">{{ $errors->first('about_us_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_2_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('about_us_3') ? 'has-error' : '' }}">
                            <label class="required" for="about_us_3">{{ trans('cruds.aboutUs.fields.about_us_3') }}</label>
                            <textarea class="form-control" name="about_us_3" id="about_us_3" required>{{ old('about_us_3', $aboutUs->about_us_3) }}</textarea>
                            @if($errors->has('about_us_3'))
                                <span class="help-block" role="alert">{{ $errors->first('about_us_3') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_3_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('about_us_photo') ? 'has-error' : '' }}">
                            <label class="required" for="about_us_photo">{{ trans('cruds.aboutUs.fields.about_us_photo') }}</label>
                            <div class="needsclick dropzone" id="about_us_photo-dropzone">
                            </div>
                            @if($errors->has('about_us_photo'))
                                <span class="help-block" role="alert">{{ $errors->first('about_us_photo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_photo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label class="required" for="description">{{ trans('cruds.aboutUs.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description" required>{{ old('description', $aboutUs->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('client_text') ? 'has-error' : '' }}">
                            <label class="required" for="client_text">{{ trans('cruds.aboutUs.fields.client_text') }}</label>
                            <textarea class="form-control" name="client_text" id="client_text" required>{{ old('client_text', $aboutUs->client_text) }}</textarea>
                            @if($errors->has('client_text'))
                                <span class="help-block" role="alert">{{ $errors->first('client_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.client_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('success_text') ? 'has-error' : '' }}">
                            <label class="required" for="success_text">{{ trans('cruds.aboutUs.fields.success_text') }}</label>
                            <textarea class="form-control" name="success_text" id="success_text" required>{{ old('success_text', $aboutUs->success_text) }}</textarea>
                            @if($errors->has('success_text'))
                                <span class="help-block" role="alert">{{ $errors->first('success_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.success_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('task_text') ? 'has-error' : '' }}">
                            <label class="required" for="task_text">{{ trans('cruds.aboutUs.fields.task_text') }}</label>
                            <textarea class="form-control" name="task_text" id="task_text" required>{{ old('task_text', $aboutUs->task_text) }}</textarea>
                            @if($errors->has('task_text'))
                                <span class="help-block" role="alert">{{ $errors->first('task_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.task_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email_1') ? 'has-error' : '' }}">
                            <label class="required" for="email_1">{{ trans('cruds.aboutUs.fields.email_1') }}</label>
                            <input class="form-control" type="email" name="email_1" id="email_1" value="{{ old('email_1', $aboutUs->email_1) }}" required>
                            @if($errors->has('email_1'))
                                <span class="help-block" role="alert">{{ $errors->first('email_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.email_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone_1') ? 'has-error' : '' }}">
                            <label class="required" for="phone_1">{{ trans('cruds.aboutUs.fields.phone_1') }}</label>
                            <input class="form-control" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', $aboutUs->phone_1) }}" required>
                            @if($errors->has('phone_1'))
                                <span class="help-block" role="alert">{{ $errors->first('phone_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone_2') ? 'has-error' : '' }}">
                            <label for="phone_2">{{ trans('cruds.aboutUs.fields.phone_2') }}</label>
                            <input class="form-control" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $aboutUs->phone_2) }}">
                            @if($errors->has('phone_2'))
                                <span class="help-block" role="alert">{{ $errors->first('phone_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_2_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label class="required" for="address">{{ trans('cruds.aboutUs.fields.address') }}</label>
                            <textarea class="form-control" name="address" id="address" required>{{ old('address', $aboutUs->address) }}</textarea>
                            @if($errors->has('address'))
                                <span class="help-block" role="alert">{{ $errors->first('address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                            <label class="required" for="time">{{ trans('cruds.aboutUs.fields.time') }}</label>
                            <textarea class="form-control" name="time" id="time" required>{{ old('time', $aboutUs->time) }}</textarea>
                            @if($errors->has('time'))
                                <span class="help-block" role="alert">{{ $errors->first('time') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.time_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                            <label for="facebook">{{ trans('cruds.aboutUs.fields.facebook') }}</label>
                            <input class="form-control" type="text" name="facebook" id="facebook" value="{{ old('facebook', $aboutUs->facebook) }}">
                            @if($errors->has('facebook'))
                                <span class="help-block" role="alert">{{ $errors->first('facebook') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.facebook_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                            <label for="twitter">{{ trans('cruds.aboutUs.fields.twitter') }}</label>
                            <input class="form-control" type="text" name="twitter" id="twitter" value="{{ old('twitter', $aboutUs->twitter) }}">
                            @if($errors->has('twitter'))
                                <span class="help-block" role="alert">{{ $errors->first('twitter') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.twitter_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('instegram') ? 'has-error' : '' }}">
                            <label for="instegram">{{ trans('cruds.aboutUs.fields.instegram') }}</label>
                            <input class="form-control" type="text" name="instegram" id="instegram" value="{{ old('instegram', $aboutUs->instegram) }}">
                            @if($errors->has('instegram'))
                                <span class="help-block" role="alert">{{ $errors->first('instegram') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.instegram_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('youtube') ? 'has-error' : '' }}">
                            <label for="youtube">{{ trans('cruds.aboutUs.fields.youtube') }}</label>
                            <input class="form-control" type="text" name="youtube" id="youtube" value="{{ old('youtube', $aboutUs->youtube) }}">
                            @if($errors->has('youtube'))
                                <span class="help-block" role="alert">{{ $errors->first('youtube') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.youtube_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('linkedin') ? 'has-error' : '' }}">
                            <label for="linkedin">{{ trans('cruds.aboutUs.fields.linkedin') }}</label>
                            <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $aboutUs->linkedin) }}">
                            @if($errors->has('linkedin'))
                                <span class="help-block" role="alert">{{ $errors->first('linkedin') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.linkedin_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_text') ? 'has-error' : '' }}">
                            <label class="required" for="contact_text">{{ trans('cruds.aboutUs.fields.contact_text') }}</label>
                            <textarea class="form-control" name="contact_text" id="contact_text" required>{{ old('contact_text', $aboutUs->contact_text) }}</textarea>
                            @if($errors->has('contact_text'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.contact_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                            <label class="required" for="latitude">{{ trans('cruds.aboutUs.fields.latitude') }}</label>
                            <input class="form-control" type="text" name="latitude" id="latitude" value="{{ old('latitude', $aboutUs->latitude) }}" required>
                            @if($errors->has('latitude'))
                                <span class="help-block" role="alert">{{ $errors->first('latitude') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.latitude_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                            <label class="required" for="longitude">{{ trans('cruds.aboutUs.fields.longitude') }}</label>
                            <input class="form-control" type="text" name="longitude" id="longitude" value="{{ old('longitude', $aboutUs->longitude) }}" required>
                            @if($errors->has('longitude'))
                                <span class="help-block" role="alert">{{ $errors->first('longitude') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.longitude_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('manager_name') ? 'has-error' : '' }}">
                            <label class="required" for="manager_name">{{ trans('cruds.aboutUs.fields.manager_name') }}</label>
                            <input class="form-control" type="text" name="manager_name" id="manager_name" value="{{ old('manager_name', $aboutUs->manager_name) }}" required>
                            @if($errors->has('manager_name'))
                                <span class="help-block" role="alert">{{ $errors->first('manager_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.manager_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('manager_photo') ? 'has-error' : '' }}">
                            <label class="required" for="manager_photo">{{ trans('cruds.aboutUs.fields.manager_photo') }}</label>
                            <div class="needsclick dropzone" id="manager_photo-dropzone">
                            </div>
                            @if($errors->has('manager_photo'))
                                <span class="help-block" role="alert">{{ $errors->first('manager_photo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.aboutUs.fields.manager_photo_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.aboutUsPhotoDropzone = {
    url: '{{ route('admin.aboutuses.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 465,
      height: 610
    },
    success: function (file, response) {
      $('form').find('input[name="about_us_photo"]').remove()
      $('form').append('<input type="hidden" name="about_us_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="about_us_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->about_us_photo)
      var file = {!! json_encode($aboutUs->about_us_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="about_us_photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    Dropzone.options.managerPhotoDropzone = {
    url: '{{ route('admin.aboutuses.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 760,
      height: 750
    },
    success: function (file, response) {
      $('form').find('input[name="manager_photo"]').remove()
      $('form').append('<input type="hidden" name="manager_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="manager_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->manager_photo)
      var file = {!! json_encode($aboutUs->manager_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="manager_photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection