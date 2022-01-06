<?php
use App\Libraries\svgSite;
use App\Libraries\uploadFile;
$svg= new svgSite();
$media = new uploadFile();

?>
@extends('layouts.adminApp')

@section("content")
    <div class="container text-right">

    <form class="m-3" method="post" action="{{ route('aSlider.store') }}" enctype="multipart/form-data">

    @csrf

        <div class="row">
            <label for="fileName">تصویر </label>
            <input type="file" name="fileName" class="form-control col-10" />
        </div>
        <div class="row">
            <label for="title">عنوان </label>
            <input type="text" name="title" class="form-control col-10" />

        </div>
        <div class="row">
            <label for="url">لینک </label>
            <input type="text" name="url" class="form-control col-10" />

        </div>
        <div class="row">
            <label for="description">توضیح </label>
            <input type="text" name="description" class="form-control col-10" />

        </div>
        <div class="row">
            <label for="show">نمایش </label>
            <input type="radio" name="show"  />

        </div>
        <div class="row">
            <label for="submit">ارسال </label>

            <input name="submit" type="submit" class="btn btn-warning col-2" value="ثبت " />

        </div>



</form>
    </div>

@endsection
