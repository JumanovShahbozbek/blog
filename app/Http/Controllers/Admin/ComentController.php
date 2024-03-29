<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComentRequest;
use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentController extends Controller
{
    public function index()
    {
        $coments = DB::table('coments')->orderBy('id', 'DESC')->get();

        return view('admin.coments.index', compact('coments'));
    }

    public function create()
    {
        return view('admin.coments.create');
    }

    public function store(StoreComentRequest $request)
    {

        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imgName = $file->getClientOriginalName();
            $file->move('images/', $imgName);
            $requestData['img'] = $imgName;
        }
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $iconName = $file->getClientOriginalName();
            $file->move('images/', $iconName);
            $requestData['icon'] = $iconName;
        }
        Coment::create($requestData);

        return redirect()->route('admin.coments.index');
    }

    public function show($id)
    {
        $coment = DB::table('coments')->where('id', $id)->first();

        return view('admin.coments.show', compact('coment'));
    }

    public function edit($id)
    {
        $coment = DB::table('coments')->where('id', $id)->first();

        return view('admin.coments.edit', compact('coment'));
    }

    public function update(Request $request, $id)
    {
        DB::table('coments')->where('id', $id)->update([
            'icon' => $request->icon,
            'content' => $request->content,
            'img' => $request->img,
            'surname' => $request->surname,
            'name' => $request->name,
            'subject' => $request->subject,
        ]);

        return redirect()->route('admin.coments.index');
    }

    public function destroy($id)
    {
        DB::table('coments')->where('id', $id)->delete();

        return redirect()->route('admin.coments.index');
    }
}
