<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;
use Alert;

class MateriController extends Controller
{

    public function index(Materi $materi)
    {
        return view('admin.materi.index',[
            'materi' => $materi->latest()->paginate(5),
        ]);
    }


    public function create(Materi $materi)
    {
        return view('admin.materi.create', compact('materi'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_materi' => 'required|string',
            'sub_materi' => 'required|string',
            'materi' => 'required|string',
            'thumbnail_brt' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        $attr = $request->all();

        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("img/materi") : null;

        $attr['thumbnail'] = $thumbnail;

        Materi::create($attr);

        Alert::success('Materi Berhasil Di Tambahkan');

        return redirect('/admin/materi');
    }


    public function show(Materi $materi)
    {
        return view('admin.materi.show',compact('materi'));
    }


    public function edit(Materi $materi)
    {
        return view('admin.materi.edit',compact('materi'));
    }


    public function update(Request $request, Materi $materi)
    {
        $attr = $request->all();

        $this->validate($request,[
            'kode_materi' => 'required|string',
            'sub_materi' => 'required|string',
            'materi' => 'required|string',
            'thumbnail_brt' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        if(request()->file('thumbnail')){
            \Storage::delete($materi->thumbnail);
            $thumbnail=request()->file('thumbnail')->store("img/materi");
        } else{
            $thumbnail = $materi->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $materi->update($attr);
        Alert::success('Materi Berhasil Di Ubah');

        return redirect('/admin/materi');
    }


    public function destroy(Materi $materi)
    {
        \Storage::delete($materi->thumbnail);
        $materi->delete();
        Alert::success('Materi Berhasil Di Hapus');

        return redirect('/admin/materi');
    }
}