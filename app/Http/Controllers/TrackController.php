<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;


class TrackController extends Controller
{
    
    public function index()
    {
        $rows = Track::All();
        return view('track.index', compact('rows'));
    
    }

    
    public function create()
    {
        return view('track.add');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'track_name' => 'bail|required:tb_track'
        ],
        [
            'track_name.required' => 'Isi Nama Track!'
       ]);

       Track::create([
            'track_name' => $request->track_name,
            'track_artist_id' => $request->track_artist_id,
            'track_album_id' => $request->track_album_id,
            'track_time' => $request->track_time
       ]);

       return redirect('track'); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $row = Track::findOrFail($id);
        return view('track.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
         $request->validate([
            'track_name' => 'bail|required:tb_track'
        ],
        [
            'track_name.required' => 'Isi Nama Track !'
        ]);

        $row = Track::findOrFail($id);
        $row->update([
            'track_name' => $request->track_name,
            'track_artist_id' => $request->track_artist_id,
            'track_album_id' => $request->track_album_id,
            'track_time' => $request->track_time   
        ]);
        return redirect('track');
    }

    
    public function destroy($id)
    {
         {
        $row = Track::findOrFail($id);
        $row->delete();

        return redirect('track');
    }
    }
}
