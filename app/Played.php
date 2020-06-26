<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    protected $table = "tb_played";
    protected $primaryKey = "id";
    protected $fillable = ['played_artist_id', 'played_album_id', 'played_track_id'];
}
