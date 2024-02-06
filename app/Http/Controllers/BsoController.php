<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bso;
use DB;
use File;

class BsoController extends Controller
{
    public function create()
    {
        return view('admin.bso.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'required|mimes:jpeg,jpg,png|max:2200',
            'basement' => 'required',
            'loc' => 'required',
        ]);

        $picture = $request->picture;
        $new_picture = time() . ' - ' . $picture->getClientOriginalName();


        Bso::create([
            "title" => $request["title"],
            "desc" => $request["desc"],
            "picture" => $new_picture,
            "basement" => $request["basement"],
            "loc" => $request["loc"],
        ]);

        $picture->move('img-upload/', $new_picture);

        return redirect('/renicantik/list-bso')->with('success', 'Data BSO successful!');
    }

    public function index()
    {
        $bsos = Bso::all();
        return view('admin.bso.list', compact('bsos'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $bso = Bso::find($id);
        return view('admin.bso.edit',compact('bso'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'mimes:jpeg,jpg,png|max:2200',
            'basement' => 'required',
            'loc' => 'required',
        ]);

        $bso = Bso::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-upload/".$bso->picture);
            $picture = $request->picture;
            $new_picture = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-upload/', $new_picture);
            $bso_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "picture" => $new_picture,
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        } else {
            $bso_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        }
        
        $bso->update($bso_data);

        return redirect('/renicantik/list-bso')->with('success', 'BSO successfully updated!');
    }

    public function destroy($id) {
        $bso = DB::table('bsos')->where('id', $id)->delete();
        return redirect('/renicantik/list-bso')->with('success', 'BSO successfully deleted!');
    }

    public function upload($id) {
        $bso = Bso::where('id',$id)->first();
        return view('detail-bso',compact('bso')); 
    }

    // public function list_content() {
    //     $articles = Article::latest()->paginate(8);
    //     $carousels = Article::latest()->limit(3)->get();

    //     return view('blog',compact('articles','carousels')); 
    // }

    public function show()
    {
        $bsos = Bso::all();
        return view('bso', compact('bsos'));
    }
}
