<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use DB;
use File;

class UkmController extends Controller
{
    public function create()
    {
        return view('admin.ukm.add');
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


        Ukm::create([
            "title" => $request["title"],
            "desc" => $request["desc"],
            "picture" => $new_picture,
            "basement" => $request["basement"],
            "loc" => $request["loc"],
        ]);

        $picture->move('img-upload/', $new_picture);

        return redirect('/renicantik/list-ukm')->with('success', 'Data UKM successful!');
    }

    public function index()
    {
        $ukms = Ukm::all();
        return view('admin.ukm.list', compact('ukms'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $ukm = Ukm::find($id);
        return view('admin.ukm.edit',compact('ukm'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'mimes:jpeg,jpg,png|max:2200',
            'basement' => 'required',
            'loc' => 'required',
        ]);

        $ukm = Ukm::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-upload/".$ukm->picture);
            $picture = $request->picture;
            $new_picture = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-upload/', $new_picture);
            $ukm_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "picture" => $new_picture,
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        } else {
            $ukm_data = [
                "title" => $request["title"],
                "desc" => $request["desc"],
                "basement" => $request["basement"],
                "loc" => $request["loc"],
            ];
        }
        
        $ukm->update($ukm_data);

        return redirect('/renicantik/list-ukm')->with('success', 'UKM successfully updated!');
    }

    public function destroy($id) {
        $ukm = DB::table('ukms')->where('id', $id)->delete();
        return redirect('/renicantik/list-ukm')->with('success', 'UKM successfully deleted!');
    }

    public function upload($id) {
        $ukm = Ukm::where('id',$id)->first();
        return view('detail-ukm',compact('ukm')); 
    }

    // public function list_content() {
    //     $articles = Article::latest()->paginate(8);
    //     $carousels = Article::latest()->limit(3)->get();

    //     return view('blog',compact('articles','carousels')); 
    // }

    public function show()
    {
        $ukms = Ukm::all();
        return view('ukm', compact('ukms'));
    }
}
