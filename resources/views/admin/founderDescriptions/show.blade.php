@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.founderDescription.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.founder-descriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.founderDescription.fields.id') }}
                        </th>
                        <td>
                            {{ $founderDescription->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderDescription.fields.title') }}
                        </th>
                        <td>
                            {{ $founderDescription->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.founderDescription.fields.description') }}
                        </th>
                        <td>
                            {{ $founderDescription->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.founder-descriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection