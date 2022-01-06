<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.adminApp')

@section("content")
    <div class="container">
        <form class="m-3" method="post" action="{{ route('aCmt.store') }}">

            @csrf

            <div class="form-group row">
                <label for="description">{{$comment->description}}</label>
                <input type="text" name="commentEdit" class="form-control col-10" />

                <input type="hidden" name="commentId" value="{{ $comment->id }}" />
                <input type="submit" class="btn btn-warning col-2" value="ثبت" />

            </div>
        </form>

    </div>
@endsection
