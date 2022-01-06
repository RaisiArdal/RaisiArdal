<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.adminApp')

@section("content")
<div class="container">
    <table class="table">
        <thead class="table-dark text-center">
        <tr>
            <th style="width: 5%;">ردیف</th>
            <th style="width: 25%;">نویسنده</th>
            <th style="width: 70%;">شرح</th>
            <th style="width: 4%;">نمایش</th>
            <th style="width: 4%;">ویرایش</th>
            <th style="width: 4%;">حذف</th>
        </tr>

        </thead>
        @if(isset($comments[0]))
            <?php $i=0; ?>
            @foreach($comments as $comment)
                @if($comment->parent_id==null)
                        <tbody class="table-info">
                        <tr class="text-right bg-primary">
                            <th>{{++$i}}</th>
                            <th>
                                {{$comment->user->name}}
                            </th>
                            <th> {{$comment->description}}</th>
                            <th>
                                <form action="{{ route("aCmt.update",$comment->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="show" value="1">
                                    <button class="btn bg-light" type="submit" >
                                        @if($comment->show)
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
                                <a href="{{ route("aCmt.edit",$comment->id) }}" >
                                    <div class="btn bg-light" type="submit" >
                                        <div class="iconSvg" style="color: blue">
                                            {!! ($svg->edit())!!}
                                        </div>
                                    </div>
                                </a>

                            </th>
                            <th>
                                <form action="{{ route("aCmt.destroy",$comment->id) }}" method="post">
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
                        @if(isset($comment->replies)  )
                            <?php $j=0; ?>
                            @foreach($comment->replies as $repl)

                                <tr class="text-right bg-secondary">
                                    <th>{{$i}}-{{++$j}} </th>
                                    <th>
                                        {{$repl->user->name}}
                                    </th>
                                    <th> {{$repl->description}}</th>
                                    <th>
                                        <form action="{{ route("aCmt.update",$repl->id) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="show" value="1">
                                            <button class="btn bg-light" type="submit" >
                                                @if($repl->show)
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
                                        <a href="{{ route("aCmt.edit",$repl->id) }}" >
                                            <div class="btn bg-light" type="submit" >
                                                <div class="iconSvg" style="color: blue">
                                                    {!! ($svg->edit())!!}
                                                </div>
                                            </div>
                                        </a>

                                    </th>
                                    <th>
                                        <form action="{{ route("aCmt.destroy",$repl->id) }}" method="post">
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
                            @endforeach
                        @endif

                        </tbody>

                    @endif

            @endforeach

        @endif
    </table>

</div>
@endsection
