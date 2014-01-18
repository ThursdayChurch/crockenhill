<?php
namespace App\Models;
 
class Sermon extends \Eloquent {
 
    protected $table = 'sermons';
 
    public function author()
    {
        return $this->belongsTo('User');
    }
 
}
