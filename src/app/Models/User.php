<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'screen_name',
        'profile_stmt',
        'icon_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    //table relational method
    public function Tweets()
	{
		return $this->hasMany(Tweet::class);
	}

	public function Relations()
	{
		return $this->hasMany(Relation::class);
    }

    //同一テーブル内のリレーションメソッド
    public function follows()
    {
        return $this->belongsToMany(self::class, 'relations', 'user_id', 'follow_id');
    }

    public function followers()
    {
        return $this->belongsToMany(self::class, 'relations', 'follow_id', 'user_id');
    }

    // 一覧とページネーション
    public function getAllUsers(Int $user_id)
    {
        return $this->Where('id', '<>', $user_id)->paginate(5);
    }

    // フォローする
    public function follow(Int $follow_id)
    {
        return $this->follows()->attach($follow_id);
    }

    // フォロー解除する
    public function unfollow(Int $follow_id)
    {
        return $this->follows()->detach($follow_id);
    }

    // フォローしているか
    public function isFollowing(Int $user_id)
    {
        return (boolean) $this->follows()->where('follow_id', $user_id)->first(['id']);
    }

    // フォローされているか
    public function isFollowed(Int $user_id)
    {
        return (boolean) $this->followers()->where('user_id', $user_id)->first(['id']);
    }
}
