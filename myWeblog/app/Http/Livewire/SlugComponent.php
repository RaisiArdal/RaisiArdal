<?php

namespace App\Http\Livewire;

use App\Models\Newspost;
use Livewire\Component;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SlugComponent extends Component
{
    public $title;
    public $slug;
    public function render()
    {
        $newsPost = Newspost::latest()->take(7)->get();
        return view('livewire.slug-componenet', compact('newsPost'));
    }
    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Newspost::class, 'slug', $this->title);
    }

    public function store()
    {
        Newspost::create([
            'title' => $this->title,
            'slug'  => $this->slug
        ]);
    }
}
