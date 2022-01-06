<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;



class Newspost extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table='newsposts';
    protected $fillable = ['date','show','end','publisher_id', 'category_id', 'title','slug', 'description','visit','like','filename',];
    protected $dates = ['deleted_at'];


    public function comments()
    {
        return $this->hasMany(Comments::class)->whereNull('parent_id');
    }
        public function allLike($newsPost)
    {

        return Comments::where(['like'=>true,'newspost_id'=>$newsPost->id])->count();
    }
        public function allComment($newsPost)
    {

        return Comments::whereNotNull('description')->where(['newspost_id'=>$newsPost->id])->count();
    }
        public function allCommentDescription($newsPost)
    {

        return Comments::whereNotNull('description')->where(['newspost_id'=>$newsPost->id])->get();
    }

        public function categorie()
    {
        return  $this->belongsTo(Categorie::class,'category_id');
    }
    public function getCategorie($category_id)
    {
        $cat= Categorie::where('id',$category_id)->get();
        return $cat[0]->name;
    }
    public function getpublisher($publisher_id)
    {
        $user= User::where('id',$publisher_id)->get();
        return $user[0]->name;
    }
    public function pubilsherName()
    {
        return $this->belongsTo(User::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function updateVisit($id)
    {
        $np= $this::findorfail($id);
        $np->update(array_merge(['visit' => ++$np->visit]));
    }
}
