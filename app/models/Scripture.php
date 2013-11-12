<?php

class Scripture extends Eloquent {
   
   	protected $table = 'scripture_references';

    public $timestamps = false;
   
    public function song()
    {
        return $this->belongsTo('Song', 'song_id');
    }
   
}
