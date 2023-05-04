<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Group;
use App\Models\Teacher;
use App\Models\Coment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function welcome()
    {
        $infos = Info::limit(3)->latest()->get();
        $teachers = Teacher::limit(4)->latest()->get();
        $groups = Group::limit(3)->latest()->get();
        $coments = Coment::limit(3)->latest()->get();
        $articles = Article::limit(3)->latest()->get();

        return view('welcome', compact('groups','teachers', 'infos', 'coments', 'articles'));
    }

    public function group()
    {
        $groups = Group::limit(3)->latest()->get();

        return view('pages.group', compact('groups'));
    }

    public function team()
    {
        $teachers = Teacher::limit(4)->latest()->get();

        $coments = Coment::limit(3)->latest()->get();

        return view('pages.team', compact('teachers', 'coments'));
    }

    public function achievements()
    {
        return view('pages.achievements');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function registers(Request $request)
    {
        // return $request;
        DB::table('registers')->insert([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
        ]);

        return back();
    }

    public function copmlants(Request $request)
    {
        return $request;
        DB::table('copmlants')->insert([
            'name' => $request->name,
            'comp' => $request->comp,
        ]);

        return back();
    }
}
