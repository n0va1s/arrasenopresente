<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
        'age_range_id',
        'segment_id',
        'relax_id',
        'sexual_option_id',
        'sign_id',
        'is_woman',
        'like_day',
        'like_animal',
        'more_information',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
    ];

    /**
     * Get the gift that owns the profile.
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}
