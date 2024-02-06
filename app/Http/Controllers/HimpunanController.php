<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Himpunan;
use DB;
use File;

class HimpunanController extends Controller
{
    public function create()
    {
        return view('admin.himpunan.add');
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


        Himpunan::create([
            "title" => $request["title"],
            "desc" => $request["desc"],
            "picture" => $new_picture,
            "basement" => $request["basement"],
            "loc" => $request["loc"],
        ]);

        $picture->move('img-upload/', $new_picture);

        return redirect('/renicantik/list-himpunan')->with('success', 'Data Himpunan successful!');
    }

    public function index()
    {
        $himpunans = Himpunan::all();
        return view('admin.himpunan.list', compact('himpunans'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $himpunan = Himpunan::find($id);
        return view('admin.himpunan.edit',compact('himpunan'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'mimes:jpeg,jpg,png|max:2200',
            'basement' => 'required',
            'loc' => 'required',
        ]);

        $himpunan = Himpunan::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-upload/".$himpunan->picture);
            $picture = $request->picture;
            $new_picture = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-upload/', $new_picture);
            $himpunan_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "picture" => $new_picture,
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        } else {
            $himpunan_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        }
        
        $himpunan->update($himpunan_data);

        return redirect('/renicantik/list-himpunan')->with('success', 'Himpunan successfully updated!');
    }

    public function destroy($id) {
        $himpunan = DB::table('himpunans')->where('id', $id)->delete();
        return redirect('/renicantik/list-himpunan')->with('success', 'Himpunan successfully deleted!');
    }

    public function upload($id) {
        $himpunan = Himpunan::where('id',$id)->first();
        return view('detail-himpunan',compact('himpunan')); 
    }

    // public function list_content() {
    //     $articles = Article::latest()->paginate(8);
    //     $carousels = Article::latest()->limit(3)->get();

    //     return view('blog',compact('articles','carousels')); 
    // }

    public function show()
    {
        $himpunans = Himpunan::all();
        return view('himpunan', compact('himpunans'));
    }
}
