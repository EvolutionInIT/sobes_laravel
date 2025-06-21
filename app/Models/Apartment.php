<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    //для чего используется fillable?
    protected $fillable = [
        'rooms',
        'entrance',
        'floor',
        'address',
    ];

    /**
     * Get the users associated with the apartment.
     */
    public function owners(): BelongsToMany
    {
        //как называется такое отношение?
        //что не так с этим отношением?
        return $this->belongsToMany(User::class, 'users_apartments', 'apartment_id', 'user_id', 'apartment_id', 'user_id');
    }
}
