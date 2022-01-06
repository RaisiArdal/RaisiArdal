<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.adminApp')

@section("content")
    <div class="container">
        <table class="table table-bordered m-0 p-0">
            <thead class="table-dark text-center m-0 p-0">
                <tr>
                    <th style="width: 5%;">ردیف</th>
                    <th style="width: 25%;">تاریخ</th>
                    <th style="width: 70%;">تیتر</th>
                    <th style="width: 4%;">مشاهده</th>
                    <th style="width: 4%;">ویرایش</th>
                    <th style="width: 4%;">نمایش</th>
                    <th style="width: 4%;">حذف</th>
                    <th style="width: 4%;">بازدید</th>
                    <th style="width: 4%;">لایک</th>
                    <th style="width: 4%;">نظر</th>
                </tr>

            </thead>
            @if(isset($nps))
                <?php $i=0; ?>
                @foreach($nps as $np)
                    <tbody class="table-info m-0 p-0">
                        <tr class="text-right">
                            <th>{{++$i}}</th>
                            <th>
                                {{\Morilog\Jalali\Jalalian::fromDateTime($np->date)->format('%A, %d %B %Y')}}
                            </th>
                            <th> {{$np->title}}</th>
                            <th>
                                    <a class="btn bg-light" href="{{ route("aNP.show",$np->id) }}">
                                        <div class="iconSvg m-0 p-0" >
                                            {!! ($svg->read())!!}
                                        </div>

                                    </a>


                            </th>                            <th>
                                    <a class="btn bg-light" href="{{ route("aNP.edit",$np->id) }}">
                                        <div class="iconSvg m-0 p-0" >
                                            {!! ($svg->edit())!!}
                                        </div>

                                    </a>


                            </th>
                            <th>
                                <form action="{{ route("hNP",$np->id) }}" method="post">
                                    @csrf
                                    <button class="btn bg-light" type="submit" >
                                        @if($np->show)
                                            <div class="iconSvg m-0 p-0" style="color: blue">
                                                {!! ($svg->show())!!}
                                            </div>

                                        @else
                                            <div class="iconSvg m-0 p-0 " style="color: red">
                                                {!! ($svg->hide())!!}
                                            </div>

                                        @endif


                                    </button>
                                </form>

                            </th>
                            <th>
                                <form action="{{ route("aNP.destroy",$np->id) }}" method="post">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <button class="btn bg-light" type="submit" >
                                        <div class="iconSvg m-0 p-0" style="color: red">
                                            {!! ($svg->delete())!!}
                                        </div>

                                    </button>
                                </form>

                            </th>
                            <th>
                                <div class=" iconSvg m-0 p-0"  style="color: red;">

                                {{$np->visit}}
                                </div>
                                       <div class="iconSvg " style="margin-top: -10px;"  >
                                            {!! ($svg->view())!!}
                                        </div>

                            </th>
                            <th>
                                <a class="btn btn-primary m-0 p-0" href="{{route('cmtLk',['id'=>$np->id])}}"  >
                                        <div class=" iconSvg " style="color: red;" >
                                            {{$np->allLike($np)}}
                                        </div>

                                        <div class="iconSvg " style="margin-top: -15px;">
                                            {!! ($svg->love())!!}
                                        </div>
                                </a>

                            </th>
                            <th colspan="9">
                                    <a class="btn btn-primary m-0 p-0" href="{{route('aCmtNP',['id'=>$np->id])}}" target="_blank" >
                                        <div class=" iconSvg " style="color: red" >
                                            {{$np->allComment($np)}}
                                        </div>

                                        <div class="iconSvg" style="margin-top: -15px;">
                                            {!! ($svg->comment())!!}
                                        </div>

                                    </a>

                            </th>

                    </tr>

                    </tbody>
                @endforeach

            @endif
        </table>

    </div>
@endsection
