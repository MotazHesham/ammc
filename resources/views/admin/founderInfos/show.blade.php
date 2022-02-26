@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.founderInfo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.founder-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.id') }}
                        </th>
                        <td>
                            {{ $founderInfo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.title_1') }}
                        </th>
                        <td>
                            {{ $founderInfo->title_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.title_2') }}
                        </th>
                        <td>
                            {{ $founderInfo->title_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.national') }}
                        </th>
                        <td>
                            {{ $founderInfo->national }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.dob') }}
                        </th>
                        <td>
                            {{ $founderInfo->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.address') }}
                        </th>
                        <td>
                            {{ $founderInfo->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.description') }}
                        </th>
                        <td>
                            {{ $founderInfo->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderInfo.fields.photo') }}
                        </th>
                        <td>
                            @if($founderInfo->photo)
                                <a href="{{ $founderInfo->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $founderInfo->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.founder-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection