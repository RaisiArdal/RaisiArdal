<?php
use App\Libraries\svgSite;
use App\Libraries\uploadFile;
$svg= new svgSite();
$mdia = new uploadFile();

?>
@extends('layouts.adminApp')

@section("content")
<div class="container">
    <table class="table">
        <thead class="table-dark text-center">
        <tr>
            <th style="width: 5%;">ردیف</th>
            <th style="width: 25%;">تصویر</th>
            <th style="width: 4%;">نمایش</th>
            <th style="width: 4%;">ویرایش</th>
            <th style="width: 4%;">حذف</th>
        </tr>

        </thead>
        @if(isset($sliders[0]))
            <?php $i=0; ?>
            @foreach($sliders as $slider)
                        <tbody class="table-info">
                        <tr class="text-right bg-primary">
                            <th>{{++$i}}</th>
                            <th style="width: 110px;height: 35px" >
                                {!! $mdia->showMedia('/upload/images/slider/thump/',$slider->fileName,$slider->title) !!}
                                {{$slider->title}}
                            </th>
                            <th>
                                <form action="{{ route("aSlider.update",$slider->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="show" value="1">
                                    <button class="btn bg-light" type="submit" >
                                        @if($slider->show)
                                            <div class="iconSvg" style="color: blue">
                                                {!! ($svg->show())!!}
                                            </div>

                                        @else
                                            <div class="iconSvg " style="color: red">
                                                {!! ($svg->hide())!!}
                                            </div>

                                        @endif


                                    </button>
                                </form>
                            </th>
                            <th>
                                <a href="{{ route("aSlider.edit",$slider->id) }}" >
                                    <div class="btn bg-light" type="submit" >
                                        <div class="iconSvg" style="color: blue">
                                            {!! ($svg->edit())!!}
                                        </div>
                                    </div>
                                </a>

                            </th>
                            <th>
                                <form action="{{ route("aSlider.destroy",$slider->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn bg-light" type="submit" >
                                        <div class="iconSvg" style="color: red">
                                            {!! ($svg->delete())!!}
                                        </div>

                                    </button>
                                </form>

                            </th>

                        </tr>
                        </tbody>


            @endforeach
        @endif

    </table>

</div>
@endsection
