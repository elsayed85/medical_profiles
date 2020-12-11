<?php

namespace App\Models\Themes;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('background_image')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg'])
            ->singleFile();
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
