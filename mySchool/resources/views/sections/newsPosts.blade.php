<?php
use App\Libraries\uploadFile;
$media = new uploadFile();
?>
@if(isset($newsPosts[0]))

    <div class="newsPost">
        <div class="card-subtitle">
            <div class="iconSvg" style="margin: auto;">
                {!! ($svg->news())!!}
            </div>
            {{($newsPosts[0]->categorie->allVisit())}}
            بازدید از آخرین اخبار و اطلاعیه های ما
        </div>
        <div class="card-title">
            آگهی های آموزشی و پرورشی هنرستان ما
        </div>
        <h6 class="card-subtitle">
            منتظر اخبار مطالب جدید یا اعلام کارگاه های تخصصی و عمومی ما باشید.
        </h6>
        <div class="container-fluid">
            <div class="row mt-3">
                @if(isset($newsPosts))
                    @foreach($newsPosts as $news)
                        <div class="col-lg-3 col-md-6  col-sm-12" >
                            <div class="newsPostDate mr-3" >
                                <span class="newsPostMonth">
                                    {{\Morilog\Jalali\Jalalian::fromDateTime($news->date)->format('%A')}}

                                </span><i class="clearfix"></i>
                                    <span class="newsPostDay">
                                    {{\Morilog\Jalali\Jalalian::fromDateTime($news->date)->format('%d')}}
                                </span><i class="clearfix"></i>
                                    <span class="newsPostMonth">
                                    {{\Morilog\Jalali\Jalalian::fromDateTime($news->date)->format('%B')}}

                                </span><i class="clearfix"></i>
                                    <span class="newsPostMonth">
                                    {{\Morilog\Jalali\Jalalian::fromDateTime($news->date)->format('%Y')}}

                                </span>

                            </div>
                            <a href="{{ route("newsShow",$news->slug) }}" >
                                <div  class="imgNewsPost" >
                                    {!! $media->showMedia('/upload/images/newsPosts/tmp/',$news->filename,$news->title) !!}
                                </div>
                                <div class="newsPostLabel">
                                    <span>{{$news->categorie->name}}  {{$news->categorie->visit}}  بازدید </span>
                                </div>

                            </a>
                            <i class="clearfix"></i>

                            <div class="newsPostTitle text-info">
                                {{$news->title}}
                            </div>
                            <div class="row center-block m-0 p-0" >
                                <div class="col-5 m-0">
                                    <div class="iconSvg  p-1"  >
                                        {!! ($svg->publisher())!!}
                                    </div>
                                    <div class="mr-5 text-right" style="margin-top: -30px;" >

                                        {{$news->getpublisher($news->publisher_id)}}
                                    </div>

                                </div>
                                <div class="col-2 m-0">
                                    <div class="text-right" >
                                        {{ $news->allComment($news)}}
                                    </div>

                                    <div class="iconSvg mr-3 p-1" style="margin-top: -20px;"  >
                                        {!! ($svg->comment())!!}
                                    </div>

                                </div>
                                @if(\Auth::user())
                                    <div class="col-2 m-0">
                                        <form  action="{{route('cmt.store')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}" />
                                            <input type="hidden" name="newspost_id" value="{{ $news->id }}" />
                                            <input type="hidden" name="like" value="{{1}}" />

                                            <button   class=" btn btn-light" style="margin: auto;"  type="submit">
                                                <div class=" p-0 text-right" style="color: red" >
                                                    {{$news->allLike($news)}}
                                                </div>

                                                <div class="iconSvg p-1 mr-3" style="margin-top: -30px;color: red" >
                                                    {!! ($svg->love())!!}
                                                </div>
                                            </button>
                                        </form>

                                    </div>

                                @else
                                    <div class="col-2 m-0 ">
                                        <a class=" mp-0 text-right" style="margin: auto" href="{{ url('/login') }}">
                                            <span>
                                                {{$news->like}}
                                            </span>

                                            <div class="iconSvg p-1 mr-3" style="margin-top: -30px; color: red">
                                                {!! ($svg->love())!!}
                                            </div>
                                        </a>

                                    </div>

                                @endif

                                <div class="col-2 m-0 "  >
                                    <div class="0 text-right"  >
                                        {{$news->visit}}
                                    </div>

                                    <div class="iconSvg p-0 mr-4" style="margin-top: -20px;" >
                                        {!! ($svg->view())!!}
                                    </div>

                                </div>

                            </div>
                            <i class="clearfix"></i>
                            <article class="text-justify">
                                {{ Str::limit($news->description, 120) }}
                            </article>

                            <a class="navbar-link btn bg-light" href="{{ route("newsShow",$news->slug) }}">
                                مشاهده<div class="iconSvg" >
                                    {!! ($svg->read())!!}
                                </div>

                            </a>

                        </div>


                    @endforeach
                @endif
            </div>
        </div>

    </div>

@endif
