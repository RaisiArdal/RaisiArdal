<?php
use App\Libraries\svgSite;
use App\Libraries\uploadFile;
$svg= new svgSite();
$media = new uploadFile();
?>
@extends('layouts.adminApp')

@section("content")
    <div class="container text-right">
        <form class="m-3" method="post" action="{{ route('aSlider.update',$slider->id) }}" enctype="multipart/form-data">
            @method('PUT')

            @csrf
            <div class="row">

                <label for="fileName">تصویر </label>
                {!! $media->showMedia('/upload/images/slider/tmp/',$slider->fileName,$slider->title) !!}

                <input type="file" name="fileName" class="form-control col-10" />
            </div>
            <div class="row">
                <label for="title">عنوان </label>
                <input type="text" name="title" value="{{$slider->title}}" class="form-control col-10" />

            </div>
            <div class="row">
                <label for="url">لینک </label>
                <input type="text" name="url" value="{{$slider->url}}" class="form-control col-10" />

            </div>
            <div class="row">
                <label for="description">توضیح </label>
                <input type="text" name="description" value="{{$slider->description}}" class="form-control col-10" />

            </div>
            <div class="row">
                <label for="show">نمایش </label>
                <input type="radio" value="{{$slider->show}}" name="show"  />

            </div>
            <div class="row">
                <label for="submit">ارسال </label>

                <input name="submit" type="submit" class="btn btn-warning col-2" value="ثبت " />

            </div>

        </form>

    </div>
@endsection
