@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutUs.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.aboutuses.update", [$aboutUs->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="about_us_1">{{ trans('cruds.aboutUs.fields.about_us_1') }}</label>
                <textarea class="form-control {{ $errors->has('about_us_1') ? 'is-invalid' : '' }}" name="about_us_1" id="about_us_1" required>{{ old('about_us_1', $aboutUs->about_us_1) }}</textarea>
                @if($errors->has('about_us_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_us_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="about_us_2">{{ trans('cruds.aboutUs.fields.about_us_2') }}</label>
                <textarea class="form-control {{ $errors->has('about_us_2') ? 'is-invalid' : '' }}" name="about_us_2" id="about_us_2" required>{{ old('about_us_2', $aboutUs->about_us_2) }}</textarea>
                @if($errors->has('about_us_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_us_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="about_us_3">{{ trans('cruds.aboutUs.fields.about_us_3') }}</label>
                <textarea class="form-control {{ $errors->has('about_us_3') ? 'is-invalid' : '' }}" name="about_us_3" id="about_us_3" required>{{ old('about_us_3', $aboutUs->about_us_3) }}</textarea>
                @if($errors->has('about_us_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_us_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="about_us_photo">{{ trans('cruds.aboutUs.fields.about_us_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('about_us_photo') ? 'is-invalid' : '' }}" id="about_us_photo-dropzone">
                </div>
                @if($errors->has('about_us_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_us_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.about_us_photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.aboutUs.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description', $aboutUs->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="client_text">{{ trans('cruds.aboutUs.fields.client_text') }}</label>
                <textarea class="form-control {{ $errors->has('client_text') ? 'is-invalid' : '' }}" name="client_text" id="client_text" required>{{ old('client_text', $aboutUs->client_text) }}</textarea>
                @if($errors->has('client_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('client_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.client_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="success_text">{{ trans('cruds.aboutUs.fields.success_text') }}</label>
                <textarea class="form-control {{ $errors->has('success_text') ? 'is-invalid' : '' }}" name="success_text" id="success_text" required>{{ old('success_text', $aboutUs->success_text) }}</textarea>
                @if($errors->has('success_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('success_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.success_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="task_text">{{ trans('cruds.aboutUs.fields.task_text') }}</label>
                <textarea class="form-control {{ $errors->has('task_text') ? 'is-invalid' : '' }}" name="task_text" id="task_text" required>{{ old('task_text', $aboutUs->task_text) }}</textarea>
                @if($errors->has('task_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('task_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.task_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email_1">{{ trans('cruds.aboutUs.fields.email_1') }}</label>
                <input class="form-control {{ $errors->has('email_1') ? 'is-invalid' : '' }}" type="email" name="email_1" id="email_1" value="{{ old('email_1', $aboutUs->email_1) }}" required>
                @if($errors->has('email_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.email_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_1">{{ trans('cruds.aboutUs.fields.phone_1') }}</label>
                <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', $aboutUs->phone_1) }}" required>
                @if($errors->has('phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_2">{{ trans('cruds.aboutUs.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $aboutUs->phone_2) }}">
                @if($errors->has('phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.aboutUs.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" required>{{ old('address', $aboutUs->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="time">{{ trans('cruds.aboutUs.fields.time') }}</label>
                <textarea class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" id="time" required>{{ old('time', $aboutUs->time) }}</textarea>
                @if($errors->has('time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.aboutUs.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $aboutUs->facebook) }}">
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter">{{ trans('cruds.aboutUs.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $aboutUs->twitter) }}">
                @if($errors->has('twitter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instegram">{{ trans('cruds.aboutUs.fields.instegram') }}</label>
                <input class="form-control {{ $errors->has('instegram') ? 'is-invalid' : '' }}" type="text" name="instegram" id="instegram" value="{{ old('instegram', $aboutUs->instegram) }}">
                @if($errors->has('instegram'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instegram') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.instegram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube">{{ trans('cruds.aboutUs.fields.youtube') }}</label>
                <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="text" name="youtube" id="youtube" value="{{ old('youtube', $aboutUs->youtube) }}">
                @if($errors->has('youtube'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.youtube_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin">{{ trans('cruds.aboutUs.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $aboutUs->linkedin) }}">
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_text">{{ trans('cruds.aboutUs.fields.contact_text') }}</label>
                <textarea class="form-control {{ $errors->has('contact_text') ? 'is-invalid' : '' }}" name="contact_text" id="contact_text" required>{{ old('contact_text', $aboutUs->contact_text) }}</textarea>
                @if($errors->has('contact_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.contact_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="latitude">{{ trans('cruds.aboutUs.fields.latitude') }}</label>
                <input class="form-control {{ $errors->has('latitude') ? 'is-invalid' : '' }}" type="text" name="latitude" id="latitude" value="{{ old('latitude', $aboutUs->latitude) }}" required>
                @if($errors->has('latitude'))
                    <div class="invalid-feedback">
                        {{ $errors->first('latitude') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.latitude_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="longitude">{{ trans('cruds.aboutUs.fields.longitude') }}</label>
                <input class="form-control {{ $errors->has('longitude') ? 'is-invalid' : '' }}" type="text" name="longitude" id="longitude" value="{{ old('longitude', $aboutUs->longitude) }}" required>
                @if($errors->has('longitude'))
                    <div class="invalid-feedback">
                        {{ $errors->first('longitude') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.longitude_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="manager_name">{{ trans('cruds.aboutUs.fields.manager_name') }}</label>
                <input class="form-control {{ $errors->has('manager_name') ? 'is-invalid' : '' }}" type="text" name="manager_name" id="manager_name" value="{{ old('manager_name', $aboutUs->manager_name) }}" required>
                @if($errors->has('manager_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('manager_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.manager_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="manager_photo">{{ trans('cruds.aboutUs.fields.manager_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('manager_photo') ? 'is-invalid' : '' }}" id="manager_photo-dropzone">
                </div>
                @if($errors->has('manager_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('manager_photo') }}
                    </div>
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