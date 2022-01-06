<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Livewire\str;

class Categorie extends Model
{
    protected $table="categories";
    protected $guarded=[];

    public function getParent()
    {
        return $this->hasOne(Categorie::class,'id','parent_id')->withDefault(['name'=>'----']);
    }

    public function getChild()
    {
        return $this->hasMany(Categorie::class,'parent_id');
    }
    public function newsPost()
    {
        return $this->hasMany(Newspost::class,'category_id');
    }
    public function updateVisit($id)
    {
        $np= $this::findorfail($id);
        $np->update(array_merge(['visit' => ++$np->visit]));
        if($np->parent_id!=0)
        {
            $this->updateVisit($np->parent_id);
        }
    }
    public function allVisit()
    {
        return ($this::find(1)->visit);
    }

}
