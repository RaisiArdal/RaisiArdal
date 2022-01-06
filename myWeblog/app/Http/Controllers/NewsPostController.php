<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use App\Models\Newspost;
use App\Libraries\uploadFile;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\App;

class NewsPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
        $this->upload=new uploadFile();

    }
    private $upload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nps=Newspost::OrderBy('id', 'DESC')->get();
        return view('newsPosts.index' ,compact('nps') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cats=Categorie::where('parent_id',1)->get();
        return view('newsPosts.create',compact('cats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $myfile = $request->file('filename');
        if ($request->hasFile('filename'))
        {
            $imageUrl =$this->upload->image($myfile,'newsPosts',400,400);
        }else{
            $imageUrl='';
        };
        $newsslug =   \Str::slug($request->title);
        if($request->file('show')==null)
        {
            $show=false;
        }elseif($request->file('show')==false){$show=false;}else{$show=true;}

        Newspost::create(array_merge($request->all(),['slug' => $newsslug,'visit' => 0,'show' => $show,'like' => 0,'filename' => $imageUrl]));

        return redirect(route('aNP.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $newsPost=Newspost::find($id);

        return view('newsPosts.show',compact('newsPost'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $newsPost=Newspost::find($id);
        $cats=Categorie::where('parent_id',1)->get();
        return view('newsPosts.edit', compact('newsPost','cats'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $newsPost=Newspost::find($id);
        $myfile = $request->file('filename');
        if ($request->hasFile('filename'))
        {
            $imageUrl =$this->upload->image($myfile,'newsPosts',400,400);
        }else{
            $imageUrl=$newsPost->filename;
        };

        $newsPost->update(array_merge($request->all(),['filename' => $imageUrl]));

        return redirect(route('aNP.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newsPost=Newspost::find($id);
        $newsPost->delete();
        return redirect(route('aNP.index'));

    }
    /**
     * hide the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function hide($id)
    {
        //
        $newsPost=Newspost::find($id);
        if($newsPost->show==null)
        {
            $hide=false ;
        }else{
            $hide=$newsPost->show;
        }
        $newsPost->show=!$hide;
        $newsPost->save();
        return redirect(route('aNP.index'));

    }
}
