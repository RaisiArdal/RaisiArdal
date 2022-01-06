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
                <th style="width: 25%;">نام</th>
                <th style="width: 25%;">سمت</th>
                <th style="width: 70%;">شرح</th>
            </tr>

            </thead>
            @if(isset($comments[0]))
                <?php $i=0; ?>
                @foreach($comments as $comment)
                    <tbody class="table-info">
                    <tr class="text-right">
                        <th>{{++$i}}</th>
                        <th>
                            {{$comment->user->name}}
                        </th>
                        <th>
                            @if($comment->user->is_admin)
                                مدیر
                                @endif
                            @if($comment->user->is_student)
                                دانش آموز
                                @endif
                            @if($comment->user->is_management)
                                مدیر سایت
                                @endif
                            @if($comment->user->is_teacher)
                                دبیر
                                @endif
                        </th>
                        <th>
                            @if(isset($comment->description))
                            {{$comment->description}}
                            @endif
                        </th>

                    </tr>
                    </tbody>
                @endforeach

            @endif
        </table>

    </div>
@endsection
