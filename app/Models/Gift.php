<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'occasion_id',
        'price_range_id',
        'theme_id',
        'good_gift',
        'bad_gift',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the gift associated with the contact.
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get the gift associated with the contact.
     */
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    /**
     * Get the occasion detail.
     */
    public function occasion()
    {
        return $this->hasOne(Option::class, "id", "occasion_id");
    }

    /**
     * Get the priceRange detail.
     */
    public function priceRange()
    {
        return $this->hasOne(Option::class, "id", "price_range_id");
    }

    /**
     * Get the theme detail.
     */
    public function theme()
    {
        return $this->hasOne(Option::class, "id", "theme_id");
    }
}
