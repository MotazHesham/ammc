<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutUsRequest;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutUsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutuses = AboutUs::with(['media'])->get();

        return view('admin.aboutuses.index', compact('aboutuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_us_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutuses.create');
    }

    public function store(StoreAboutUsRequest $request)
    {
        $aboutUs = AboutUs::create($request->all());

        if ($request->input('about_us_photo', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_us_photo'))))->toMediaCollection('about_us_photo');
        }

        if ($request->input('manager_photo', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('manager_photo'))))->toMediaCollection('manager_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutUs->id]);
        }

        return redirect()->route('admin.aboutuses.index');
    }

    public function edit(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutuses.edit', compact('aboutUs'));
    }

    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        $aboutUs->update($request->all());

        if ($request->input('about_us_photo', false)) {
            if (!$aboutUs->about_us_photo || $request->input('about_us_photo') !== $aboutUs->about_us_photo->file_name) {
                if ($aboutUs->about_us_photo) {
                    $aboutUs->about_us_photo->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_us_photo'))))->toMediaCollection('about_us_photo');
            }
        } elseif ($aboutUs->about_us_photo) {
            $aboutUs->about_us_photo->delete();
        }

        if ($request->input('manager_photo', false)) {
            if (!$aboutUs->manager_photo || $request->input('manager_photo') !== $aboutUs->manager_photo->file_name) {
                if ($aboutUs->manager_photo) {
                    $aboutUs->manager_photo->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('manager_photo'))))->toMediaCollection('manager_photo');
            }
        } elseif ($aboutUs->manager_photo) {
            $aboutUs->manager_photo->delete();
        }

        return redirect()->route('admin.aboutuses.index');
    }

    public function show(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutuses.show', compact('aboutUs'));
    }

    public function destroy(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUs->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutUsRequest $request)
    {
        AboutUs::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('about_us_create') && Gate::denies('about_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AboutUs();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
