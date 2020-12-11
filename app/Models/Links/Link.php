<?php

namespace App\Models\Links;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Link extends Model implements HasMedia , Sortable
{
    use InteractsWithMedia , SortableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_links';

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
