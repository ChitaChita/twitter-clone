<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $primaryKey = [
        'user_id',
        'follow_id'
    ];
    protected $fillable = [
        'user_id',
        'follow_id'
    ];
    public $timestamps = false;
    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getFollowCount($user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }

    public function getFollowerCount($user_id)
    {
        return $this->where('follow_id', $user_id)->count();
    }

    // フォローしているユーザのIDを取得　ツイート時
    public function followingIds(Int $user_id)
    {
        return $this->where('user_id', $user_id)->get('follow_id');
    }
}
