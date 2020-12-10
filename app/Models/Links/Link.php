<?php

namespace App\Models\Links;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Link extends Model implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'user_links';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
