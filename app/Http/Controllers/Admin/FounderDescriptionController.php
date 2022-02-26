<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFounderDescriptionRequest;
use App\Http\Requests\StoreFounderDescriptionRequest;
use App\Http\Requests\UpdateFounderDescriptionRequest;
use App\Models\FounderDescription;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FounderDescriptionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('founder_description_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $founderDescriptions = FounderDescription::all();

        return view('admin.founderDescriptions.index', compact('founderDescriptions'));
    }

    public function create()
    {
        abort_if(Gate::denies('founder_description_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderDescriptions.create');
    }

    public function store(StoreFounderDescriptionRequest $request)
    {
        $founderDescription = FounderDescription::create($request->all());

        return redirect()->route('admin.founder-descriptions.index');
    }

    public function edit(FounderDescription $founderDescription)
    {
        abort_if(Gate::denies('founder_description_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderDescriptions.edit', compact('founderDescription'));
    }

    public function update(UpdateFounderDescriptionRequest $request, FounderDescription $founderDescription)
    {
        $founderDescription->update($request->all());

        return redirect()->route('admin.founder-descriptions.index');
    }

    public function show(FounderDescription $founderDescription)
    {
        abort_if(Gate::denies('founder_description_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.founderDescriptions.show', compact('founderDescription'));
    }

    public function destroy(FounderDescription $founderDescription)
    {
        abort_if(Gate::denies('founder_description_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $founderDescription->delete();

        return back();
    }

    public function massDestroy(MassDestroyFounderDescriptionRequest $request)
    {
        FounderDescription::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
