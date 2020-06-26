<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class ALbumController extends Controller
{
    
    public function index()
    {
        $rows = Album::All();
        return view('album.index', compact('rows'));
    
    }

    
    public function create()
    {
        return view('album.add');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'album_name' => 'bail|required:tb_album'
        ],
        [
            'album_name.required' => 'Isi Nama Album!'
       ]);

       Album::create([
            'album_name' => $request->album_name,
            'album_artist_id' => $request->album_artist_id
       ]);

       return redirect('album'); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $row = Album::findOrFail($id);
        return view('album.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
         $request->validate([
            'album_name' => 'bail|required:tb_album'
        ],
        [
            'album_name.required' => 'Isi Nama Album !'
        ]);

        $row = Album::findOrFail($id);
        $row->update([
            'album_name' => $request->album_name,
            'album_artist_id' => $request->album_artist_id   
        ]);
        return redirect('album');
    }

    
    public function destroy($id)
    {
         {
        $row = Album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
    }
}
