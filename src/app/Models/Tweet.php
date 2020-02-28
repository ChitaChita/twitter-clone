<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tweet extends Model
{
    use SoftDeletes;

    protected $primaryKey = [
        'user_id',
        'message'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
