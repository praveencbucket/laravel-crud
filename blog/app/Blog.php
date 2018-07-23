<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'published_at', 'user_id'
    ];

    protected $dates = ['published_at'];
    
     /**
     * Set the default published at time.
     *
     * @param  string  $time
     * @return void
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
    * Get the user for the blog.
    */
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}
