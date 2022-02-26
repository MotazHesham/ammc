@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.service.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.services.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $service->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $service->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.photo') }}
                                    </th>
                                    <td>
                                        @if($service->photo)
                                            <a href="{{ $service->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $service->photo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.icon') }}
                                    </th>
                                    <td>
                                        @if($service->icon)
                                            <a href="{{ $service->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $service->icon->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $service->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.service.fields.points') }}
                                    </th>
                                    <td>
                                        {{ $service->points }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.services.index') }}">
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