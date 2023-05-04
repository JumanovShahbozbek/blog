<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index()
    {
        $infos = DB::table('infos')->orderBy('id', 'DESC')->get();

        return view('admin.infos.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.infos.create');
    }

    public function store(StoreInfoRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $iconName = $file->getClientOriginalName();
            $file->move('images/', $iconName);
            $requestData['icon'] = $iconName;
        }
        Info::create($requestData);

        return redirect()->route('admin.infos.index');
    }

    public function show($id)
    {
        $info = DB::table('infos')->where('id', $id)->first();

        return view('admin.infos.show', compact('info'));
    }

    public function edit($id)
    {
        $info = DB::table('infos')->where('id', $id)->first();

        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {

        DB::table('infos')->where('id', $id)->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.infos.index');
    }

    public function destroy($id)
    {
        DB::table('infos')->where('id', $id)->delete();

        return redirect()->route('admin.infos.index');
    }
}
