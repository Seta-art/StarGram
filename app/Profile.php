<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User');
    }

    public function getImage()
    {
        $imagePath = $this->image;
        if(!$this->image)
        {
            $imagePath='avatars/default.png';
        }
        return "/storage/".$imagePath;
    }
}
