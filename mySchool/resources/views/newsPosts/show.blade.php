<?php
use App\Libraries\svgSite;
use App\Libraries\uploadFile;
$svg= new svgSite();
$media = new uploadFile();
?>
@extends('layouts.adminApp')

@section("content")
<div class="newsPost">
    <div class="card-subtitle">
        <div class="iconSvg" style="margin: auto;">
            {!! ($svg->news())!!}
        </div>

        آخرین اخبار و اطلاعیه های ما
    </div>
    <div class="card-title">
        آگهی های آموزشی و پرورشی هنرستان ما
    </div>
    <h6 class="card-subtitle">
        منتظر اخبار مطالب جدید یا اعلام کارگاه های تخصصی و عمومی ما باشید.
    </h6>
    <div class="container bg-light">
        @if(isset($newsPost))

        <div class="newsPostTitle text-primary mt-5">
            {{$newsPost->title}}
        </div>
            <div class="position-relative">
                <div class="row">
                        <div class="newsPostDate mr-3">
                            <span class="newsPostMonth">
                                {{\Morilog\Jalali\Jalalian::fromDateTime($newsPost->date)->format('%A')}}

                            </span><i class="clearfix"></i>
                            <span class="newsPostDay">
                                {{\Morilog\Jalali\Jalalian::fromDateTime($newsPost->date)->format('%d')}}
                            </span><i class="clearfix"></i>
                            <span class="newsPostMonth">
                                {{\Morilog\Jalali\Jalalian::fromDateTime($newsPost->date)->format('%B')}}

                            </span><i class="clearfix"></i>
                            <span class="newsPostMonth">
                                {{\Morilog\Jalali\Jalalian::fromDateTime($newsPost->date)->format('%Y')}}

                            </span>

                        </div>

                        <div class="container" style="margin: auto">
                        {!! $media->showMedia('/upload/images/newsPosts/',$newsPost->filename,$newsPost->title) !!}
                        <div class="newsPostLabel">
                            <span>{{$newsPost->getCategorie($newsPost->category_id)}}</span>
                        </div>

                    </div>
                </div>
                <div class="row center-block mt-4 m-0 p-0" >
                    <div class="col-1">
                        <div class="iconSvg"  >
                            {!! ($svg->publisher())!!}
                        </div>
                    </div>
                    <div class="col-3 m-0 p-0" >

                        {{$newsPost->getpublisher($newsPost->publisher_id)}}
                    </div>
                    <div class=" col-1 m-0 p-0" style="color: red;text-align: left">
                        {{$newsPost->allComment($newsPost)}}
                    </div>

                    <div class="col-1">

                    <div class="iconSvg "  >
                        {!! ($svg->comment())!!}
                    </div>

                    </div>
                    <div class="col-1 m-0 p-0"  ></div>

                    <form  action="{{route('newsLike',['id'=>$newsPost->id])}}" method="post" >
                        @csrf
                        <button   class="btn btn-light m-0 p-2" style="margin: auto;"  type="submit">
                            <div class=" iconSvg m-0 p-0" style="color: red" >
                                {{$newsPost->allLike($newsPost)}}
                            </div>

                            <div class="iconSvg " style="margin-top: -40px;">
                                {!! ($svg->love())!!}
                            </div>
                        </button>
                    </form>

                    <div class="col-1 m-0 p-0"  ></div>
                    <div class="col-1 m-0 p-0"  style="text-align: left" >
                        {{$newsPost->visit+$newsPost->like}}
                    </div>

                    <div class="iconSvg col-1 m-0 p-0" >
                        {!! ($svg->read())!!}
                    </div>

                </div>
            </div>
            <i class="clearfix"></i>

            <article class="text-justify  newsPostArticle mt-5">
                            <span >
                                  {{$newsPost->description}}
                            </span>
            </article>

        <div class="fa-comment mt-5" style="width: 70%;margin: auto">
            <div class="row bg-info mt-4" >
                <div class="card-subtitle text-center " style="margin: auto">

                    نظرات کاربران
                </div>

                <span class="text-info text-center display-4"></span>
            </div>
            @include('comment.show', ['comments' => $newsPost->comments, 'newspost_id' => $newsPost->id])

            <div class="row bg-info mt-2">
                <div class="card-subtitle text-center" style="margin: auto">نظر  شما</div>
                <span class="text-danger" style="margin: auto;">!از انتشار متن های دارای الفاظ ناشایسا خود داری می شود. </span>
            </div>
            <div class="row ">
                <form method="post" action="{{ route('cmt.store') }}">

                    @csrf

                    <div class="form-group">

                        <textarea cols="200" rows="5" class="form-control" name="description"></textarea>

                        <input type="hidden" name="newspost_id" value="{{ $newsPost->id }}" />

                    </div>

                    <div class="form-group">

                        <input type="submit" class="btn btn-success" style="margin: auto;width: 20%" value="ارسال" />

                    </div>

                </form>

            </div>

    </div>
    @endif

</div>
@endsection
