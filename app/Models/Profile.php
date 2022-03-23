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

    /**
     * Get the age range detail.
     */
    public function ageRange()
    {
        return $this->hasOne(Option::class, "id", "age_range_id");
    }

    /**
     * Get the segment detail.
     */
    public function segment()
    {
        return $this->hasOne(Option::class, "id", "segment_id");
    }

    /**
     * Get the relax detail.
     */
    public function relax()
    {
        return $this->hasOne(Option::class, "id", "relax_id");
    }

     /**
     * Get the sexual option detail.
     */
    public function sexualOption()
    {
        return $this->hasOne(Option::class, "id", "sexual_option_id");
    }

     /**
     * Get the sign detail.
     */
    public function sign()
    {
        return $this->hasOne(Option::class, "id", "sign_id");
    }
}
