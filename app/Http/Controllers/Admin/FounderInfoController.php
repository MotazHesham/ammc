<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyFounderInfoRequest;
use App\Http\Requests\StoreFounderInfoRequest;
use App\Http\Requests\UpdateFounderInfoRequest;
use App\Models\FounderInfo;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FounderInfoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('founder_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $founderInfos = FounderInfo::with(['media'])->get();

        return view('admin.founderInfos.index', compact('founderInfos'));
    }

    public function create()
    {
        abort_if(Gate::denies('founder_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderInfos.create');
    }

    public function store(StoreFounderInfoRequest $request)
    {
        $founderInfo = FounderInfo::create($request->all());

        if ($request->input('photo', false)) {
            $founderInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $founderInfo->id]);
        }

        return redirect()->route('admin.founder-infos.index');
    }

    public function edit(FounderInfo $founderInfo)
    {
        abort_if(Gate::denies('founder_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderInfos.edit', compact('founderInfo'));
    }

    public function update(UpdateFounderInfoRequest $request, FounderInfo $founderInfo)
    {
        $founderInfo->update($request->all());

        if ($request->input('photo', false)) {
            if (!$founderInfo->photo || $request->input('photo') !== $founderInfo->photo->file_name) {
                if ($founderInfo->photo) {
                    $founderInfo->photo->delete();
                }
                $founderInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($founderInfo->photo) {
            $founderInfo->photo->delete();
        }

        return redirect()->route('admin.founder-infos.index');
    }

    public function show(FounderInfo $founderInfo)
    {
        abort_if(Gate::denies('founder_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderInfos.show', compact('founderInfo'));
    }

    public function destroy(FounderInfo $founderInfo)
    {
        abort_if(Gate::denies('founder_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $founderInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyFounderInfoRequest $request)
    {
        FounderInfo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('founder_info_create') && Gate::denies('founder_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new FounderInfo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
