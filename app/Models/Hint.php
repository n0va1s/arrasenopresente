<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gift_id',
        'group_id',
        'title',
        'link',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'deleted_at',
        'code',
        'is_confirmed',
    ];

     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the gift that owns the hints.
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }

    /**
     * Get the group detail.
     */
    public function group()
    {
        return $this->hasOne(Option::class, "id", "group_id");
    }
}
