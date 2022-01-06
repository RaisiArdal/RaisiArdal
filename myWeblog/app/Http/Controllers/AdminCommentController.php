<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return back();
    }
    public function indexNewsPost($id)
    {
        //
        $comments= Comments::where('newspost_id',$id)->get();
        return view('comment.index',compact('comments'));

    }
    public function indexNewsLike($id)
    {
        //
        $comments= Comments::where(['newspost_id'=>$id,'like'=>true])->get();
        return view('comment.like',compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return back();

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

        if(isset($request->description))
        {

            $request->validate([

                'description'=>'required',
            ]);
            $input = $request->all();

            $input['user_id'] = auth()->user()->id;
            $comm= Comments::where(['user_id'=>auth()->user()->id , 'newspost_id'=>$input['newspost_id']])->first();
            if(isset($comm))
            {
                if($comm->show)
                {
                    return  redirect()->back();

                }else{
                    $comm->description=$input['description'];

                    $comm->save();
                    return  redirect()->back();
                }

            }else{
                $com2 = new Comments();
                $com2->description=$input['description'];
                $com2->user_id=auth()->user()->id ;
                $com2->newspost_id=$input['newspost_id'];
                if(isset($input['parent_id']))
                {
                    $com2->parent_id=$input['parent_id'];
                }
                $com2->like=false;
                $com2->show=false;
                $com2->save();
                return  redirect()->back();
            }

        }
        if(isset($request->like))
        {
            $comm= new Comments();
            $comm->like($request->newspost_id);
            return redirect()->back();
        }
        if(isset($request->commentEdit))
        {
            $id = $request->commentId;
            $comm= Comments::find($id);
            $comm->description=$request->commentEdit;
            $comm->save();
            return redirect()->route('aCmtNP',$comm->newspost_id);
        }

        return  redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comments $comments)
    {
        //
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comment=Comments::find($id);
        return view('comment.edit',compact('comment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(isset($request->show))
        {
            $comm=Comments::find($id);
            $show=!$comm->show;
            $comm->show=$show;
            $comm->save();
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comm=Comments::find($id);
        $comm->delete();
        return back();

    }
}
