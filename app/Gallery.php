<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'travel_package_id', 'image',  
    ];

    protected $hidden = [

    ];

    public function travel_package(){
        return $this->belongsTo(travel_package::class, 'travel_package_id', 'id');
    }
}
