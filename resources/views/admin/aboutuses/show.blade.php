@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aboutuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutUs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.about_us_1') }}
                        </th>
                        <td>
                            {{ $aboutUs->about_us_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.about_us_2') }}
                        </th>
                        <td>
                            {{ $aboutUs->about_us_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.about_us_3') }}
                        </th>
                        <td>
                            {{ $aboutUs->about_us_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.about_us_photo') }}
                        </th>
                        <td>
                            @if($aboutUs->about_us_photo)
                                <a href="{{ $aboutUs->about_us_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->about_us_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.description') }}
                        </th>
                        <td>
                            {{ $aboutUs->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.client_text') }}
                        </th>
                        <td>
                            {{ $aboutUs->client_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.success_text') }}
                        </th>
                        <td>
                            {{ $aboutUs->success_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.task_text') }}
                        </th>
                        <td>
                            {{ $aboutUs->task_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.email_1') }}
                        </th>
                        <td>
                            {{ $aboutUs->email_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.phone_1') }}
                        </th>
                        <td>
                            {{ $aboutUs->phone_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $aboutUs->phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.address') }}
                        </th>
                        <td>
                            {{ $aboutUs->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.time') }}
                        </th>
                        <td>
                            {{ $aboutUs->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.facebook') }}
                        </th>
                        <td>
                            {{ $aboutUs->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.twitter') }}
                        </th>
                        <td>
                            {{ $aboutUs->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.instegram') }}
                        </th>
                        <td>
                            {{ $aboutUs->instegram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.youtube') }}
                        </th>
                        <td>
                            {{ $aboutUs->youtube }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $aboutUs->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.contact_text') }}
                        </th>
                        <td>
                            {{ $aboutUs->contact_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.latitude') }}
                        </th>
                        <td>
                            {{ $aboutUs->latitude }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.longitude') }}
                        </th>
                        <td>
                            {{ $aboutUs->longitude }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.manager_name') }}
                        </th>
                        <td>
                            {{ $aboutUs->manager_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.manager_photo') }}
                        </th>
                        <td>
                            @if($aboutUs->manager_photo)
                                <a href="{{ $aboutUs->manager_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->manager_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aboutuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection