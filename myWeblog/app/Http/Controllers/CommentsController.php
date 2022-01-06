<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
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
                if(isset($input['parent_id']))
                {
                    $com2->parent_id=$input['parent_id'];
                }

                $com2->newspost_id=$input['newspost_id'];
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
    public function edit(Comments $comments)
    {
        //
        return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        //
        return back();

    }
}
