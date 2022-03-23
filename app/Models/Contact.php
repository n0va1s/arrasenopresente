<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
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
        'state_id',
        'emailFrom',
        'emailTo',
        'name',
        'is_woman',
        'age',
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
     * Get the gift that owns the contact.
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }

    /**
     * Get the state detail.
     */
    public function state()
    {
        return $this->hasOne(Option::class, "id", "state_id");
    }
}
