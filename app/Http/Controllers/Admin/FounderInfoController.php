<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFounderInfoRequest;
use App\Http\Requests\StoreFounderInfoRequest;
use App\Http\Requests\UpdateFounderInfoRequest;
use App\Models\FounderInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FounderInfoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('founder_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $founderInfos = FounderInfo::all();

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
}
