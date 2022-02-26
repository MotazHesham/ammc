@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.slider.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slider.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $slider->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slider.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $slider->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slider.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $slider->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slider.fields.photo') }}
                                    </th>
                                    <td>
                                        @if($slider->photo)
                                            <a href="{{ $slider->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $slider->photo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slider.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Slider::STATUS_RADIO[$slider->status] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection