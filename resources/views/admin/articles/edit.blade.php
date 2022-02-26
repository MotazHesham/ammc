@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.article.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.articles.update", [$article->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="required" for="title">{{ trans('cruds.article.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required>
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('written') ? 'has-error' : '' }}">
                            <label class="required" for="written">{{ trans('cruds.article.fields.written') }}</label>
                            <input class="form-control" type="text" name="written" id="written" value="{{ old('written', $article->written) }}" required>
                            @if($errors->has('written'))
                                <span class="help-block" role="alert">{{ $errors->first('written') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.written_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
                            <label class="required" for="short_description">{{ trans('cruds.article.fields.short_description') }}</label>
                            <input class="form-control" type="text" name="short_description" id="short_description" value="{{ old('short_description', $article->short_description) }}" required>
                            @if($errors->has('short_description'))
                                <span class="help-block" role="alert">{{ $errors->first('short_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.short_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('long_description') ? 'has-error' : '' }}">
                            <label class="required" for="long_description">{{ trans('cruds.article.fields.long_description') }}</label>
                            <textarea class="form-control" name="long_description" id="long_description" required>{{ old('long_description', $article->long_description) }}</textarea>
                            @if($errors->has('long_description'))
                                <span class="help-block" role="alert">{{ $errors->first('long_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.long_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            <label class="required" for="photo">{{ trans('cruds.article.fields.photo') }}</label>
                            <div class="needsclick dropzone" id="photo-dropzone">
                            </div>
                            @if($errors->has('photo'))
                                <span class="help-block" role="alert">{{ $errors->first('photo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.photo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.article.fields.status') }}</label>
                            @foreach(App\Models\Article::STATUS_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="status_{{ $key }}" name="status" value="{{ $key }}" {{ old('status', $article->status) === (string) $key ? 'checked' : '' }}>
                                    <label for="status_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.article.fields.status_helper') }}</span>
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
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.articles.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 1120,
      height: 470
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($article) && $article->photo)
      var file = {!! json_encode($article->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
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