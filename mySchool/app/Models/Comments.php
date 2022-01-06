<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comments extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='comments';
    protected $fillable = ['user_id','newspost_id'];
    protected $dates = ['deleted_at'];

    public function user()

    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function replies()
    {
        return $this->hasMany(Comments::class, 'parent_id');
    }
    public function allLike()
    {

        return $this->where('like','=',true)->count();
    }
    public function like($id)
    {

        $comm= $this::where(['newspost_id'=>$id ,'user_id'=>auth()->user()->id] )->get();
        if(isset($comm[0]))
        {

            $lk=$comm[0]->like;
            $comm[0]->like=!$lk;
            $comm[0]->save();
        }else{
            $comm= new Comments();
            $comm->like=true;
            $comm->user_id=auth()->user()->id;
            $comm->newspost_id=$id;
            $comm->save();
        }
    }
}
