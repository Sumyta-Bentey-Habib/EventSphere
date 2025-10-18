<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','description','image','event_time'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookmarks(): BelongsToMany
    {
        // Correctly links to the User model via the 'bookmarks' pivot table
        // 'event_id' is the foreign key for this model (Event)
        // 'user_id' is the foreign key for the related model (User)
        return $this->belongsToMany(User::class, 'bookmarks', 'event_id', 'user_id')->withTimestamps();
    }
}
