<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function bookmarks(): BelongsToMany
    {
        // Correctly links to the Event model via the 'bookmarks' pivot table
        // 'user_id' is the foreign key for this model (User)
        // 'event_id' is the foreign key for the related model (Event)
        return $this->belongsToMany(Event::class, 'bookmarks', 'user_id', 'event_id')->withTimestamps();
    }
}
