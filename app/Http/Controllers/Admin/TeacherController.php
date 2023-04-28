<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherReequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = DB::table('teachers')->orderBy('id', 'DESC')->paginate(3);

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(StoreTeacherReequest $request)
    {
/*         $request->validate([
            'icon' => 'required',
            'tgram' => 'required'
        ]); */
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = $request->file('icon');
            $iconName = $file->getClientOriginalName();
            $file->move('images/', $iconName);
            $requestData['icon'] = $iconName;
        }
        Teacher::create($requestData);


/*         DB::table('teachers')->insert([
            'icon' => $request->icon,
            'tgram' => $request->tgram,
            'fbook' => $request->fbook,
            'insta' => $request->insta,
            'surname' => $request->surname,
            'name' => $request->name,
            'subject' => $request->subject,
        ]); */

        return redirect()->route('admin.teachers.index');
    }

    public function show($id)
    {
        $teacher = DB::table('teachers')->where('id', $id)->first();

        return view('admin.teachers.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = DB::table('teachers')->where('id', $id)->first();

        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {


        DB::table('teachers')->where('id', $id)->update([
            'icon' => $request->icon,
            'tgram' => $request->tgram,
            'fbook' => $request->fbook,
            'insta' => $request->insta,
            'surname' => $request->surname,
            'name' => $request->name,
            'subject' => $request->subject,
        ]);

        return redirect()->route('admin.teachers.index');
    }

    public function destroy($id)
    {
        DB::table('teachers')->where('id', $id)->delete();

        return redirect()->route('admin.teachers.index');
    }
}
