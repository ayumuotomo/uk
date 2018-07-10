<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
     public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    
    public function favorites()
{
        return $this->belongsToMany(Post::class, 'favorites', 'user_id', 'favorite_id')->withTimestamps();
}
    
    
 public function favorite($postId)
{
    // confirm if already following
    $exist = $this->is_favorites($postId);
   
    if ($exist) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->favorites()->attach($postId);
        return true;
    }
}

public function unfavorite($postId)
{
    // confirming if already following
    $exist = $this->is_favorites($postId);
   


    if ($exist) {
        // stop following if following
        $this->favorites()->detach($postId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}

public function is_favorites($postId) {
    return $this->favorites()->where('favorite_id', $postId)->exists();
}


}
