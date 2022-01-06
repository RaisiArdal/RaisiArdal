<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Libraries\uploadFile;

class SliderController extends Controller
{
    private $upload;

    public function __construct()
    {
        $this->middleware('is_admin');
        $this->upload=new uploadFile();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders=Slider::OrderBy('id', 'DESC')->get();
        return view('slider.index' ,compact('sliders') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('slider.create');

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

        $myfile = $request->file('fileName');
        if ($request->hasFile('fileName'))
        {
            $imageUrl =$this->upload->image($myfile,'slider',1110,350,.2);
        }else{
            $imageUrl='';
        };
        if($request->file('show')==null)
        {
            $show=false;
        }elseif($request->file('show')==false){$show=false;}else{$show=true;}

        Slider::create(array_merge($request->all(),['show' => $show,'fileName' => $imageUrl]));

        return redirect(route('aSlider.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $slider=Slider::find($id);

        return view('slider.show',compact('slider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider=Slider::find($id);

        return view('slider.edit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $slider=Slider::find($id);
        $myfile = $request->file('fileName');
        if ($request->hasFile('fileName'))
        {
            $imageUrl =$this->upload->image($myfile,'slider',1100,350,.2);
            $slider->update(array_merge($request->all(),['fileName' => $imageUrl]));

        }else{
            $imageUrl=$slider->filename;
            $slider->update(array_merge($request->all()));

        };


        return redirect(route('aSlider.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider=Slider::find($id);
        $slider->delete();
        return redirect(route('aSlider.index'));


    }
}
