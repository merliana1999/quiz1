<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Played;


class PlayedController extends Controller
{
    
    public function index()
    {
        $rows = Played::All();
        return view('played.index', compact('rows'));
    
    }

    
    public function create()
    {
        return view('played.add');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'played_artist_id' => 'bail|required:tb_played'
        ],
        [
            'played_artist_id.required' => 'Isi ID Artist!'
       ]);

       Played::create([
            'played_artist_id' => $request->played_artist_id,
            'played_album_id' => $request->played_album_id,
            'played_track_id' => $request->played_track_id
       ]);

       return redirect('played'); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $row = Played::findOrFail($id);
        return view('played.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
         $request->validate([
            'played_artist_id' => 'bail|required:tb_played'
        ],
        [
            'played_artist_id.required' => 'Isi ID Artist !'
        ]);

        $row = Played::findOrFail($id);
        $row->update([
            'played_artist_id' => $request->played_artist_id,
            'played_album_id' => $request->played_album_id,
            'played_track_id' => $request->played_track_id   
        ]);
        return redirect('played');
    }

    
    public function destroy($id)
    {
         {
        $row = Played::findOrFail($id);
        $row->delete();

        return redirect('played');
    }
    }
}
