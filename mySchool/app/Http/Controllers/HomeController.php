<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Newspost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $newsPosts=Newspost::where('show',true)->OrderBy('id', 'DESC')->take(10)->get();
        foreach ($newsPosts as $np)
        {
            $np->categorie->updateVisit($np->category_id);
        }
        return view('home',compact('newsPosts'));
    }
    public function newsLike(Request $request)
    {
        $comm= new Comments();
        $comm->like($request->id);
        return redirect()->back();
    }
    public function newsShow($slug)
    {
        $np=Newspost::where('slug',$slug)->get();
        $newsPost=$np[0];
        $newsPost->update(array_merge(['visit' => ++$newsPost->visit]));
        return view('newsPostShow',compact('newsPost'));
    }
    public function newsVisit($id)
    {
        $np=Newspost::find($id);
        $np->updateVisit($np->id);
    }
    public function userHome()
    {
        return view('user.home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function studentHome()
    {
        return view('student.home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function teacherHome()
    {
        return view('teacher.home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managementHome()
    {
        return view('management.home');
    }
}
