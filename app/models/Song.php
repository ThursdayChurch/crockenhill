<?php

class Song extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'songs';

	protected $primaryKey = 'song_id';

    public $timestamps = false;

    public function playdates()
    {
        return $this->hasMany('Playdate');
    }
    
    public function scripturereferences()
    {
        return $this->hasMany('Scripture', 'song_id');
    }

}
