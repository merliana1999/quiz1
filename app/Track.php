<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "tb_track";
    protected $primaryKey = "id";
    protected $fillable = ['track_name', 'track_artist_id', 'track_album_id', 'track_time'];
}
