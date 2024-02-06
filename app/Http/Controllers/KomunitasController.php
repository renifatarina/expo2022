<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunitas;
use DB;
use File;

class KomunitasController extends Controller
{
    public function create()
    {
        return view('admin.komunitas.add');
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


        Komunitas::create([
            "title" => $request["title"],
            "desc" => $request["desc"],
            "picture" => $new_picture,
            "basement" => $request["basement"],
            "loc" => $request["loc"],
        ]);

        $picture->move('img-upload/', $new_picture);

        return redirect('/renicantik/list-komunitas')->with('success', 'Data Komunitas successful!');
    }

    public function index()
    {
        $komunitases = Komunitas::all();
        return view('admin.komunitas.list', compact('komunitases'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $komunitas = Komunitas::find($id);
        return view('admin.komunitas.edit',compact('komunitas'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'mimes:jpeg,jpg,png|max:2200',
            'basement' => 'required',
            'loc' => 'required',
        ]);

        $komunitas = Komunitas::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-upload/".$komunitas->picture);
            $picture = $request->picture;
            $new_picture = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-upload/', $new_picture);
            $komunitas_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "picture" => $new_picture,
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        } else {
            $komunitas_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        }
        
        $komunitas->update($komunitas_data);

        return redirect('/renicantik/list-komunitas')->with('success', 'Komunitas successfully updated!');
    }

    public function destroy($id) {
        $komunitas = DB::table('komunitas')->where('id', $id)->delete();
        return redirect('/renicantik/list-komunitas')->with('success', 'Komunitas successfully deleted!');
    }

    public function upload($id) {
        $komunitas = Komunitas::where('id',$id)->first();
        return view('detail-komunitas',compact('komunitas')); 
    }

    // public function list_content() {
    //     $articles = Article::latest()->paginate(8);
    //     $carousels = Article::latest()->limit(3)->get();

    //     return view('blog',compact('articles','carousels')); 
    // }

    public function show()
    {
        $komunitases = Komunitas::all();
        return view('komunitas', compact('komunitases'));
    }
}
