<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.adminApp')

@section('content')
        <h1 class="text-center my-4 title-box">نمایش دسته ها</h1>

        <div class="container">
            <table class="table table-bordered m-0 p-0">
                <thead>
                <tr class="text-center m-0 p-0">
                    <td>ردیف</td>
                    <td>نام دسته</td>
                    <td>نام دسته اصلی</td>
                    <td>تعداد بازدید</td>
                    <td>ویرایش/حذف</td>
                </tr>
                </thead>
                <tbody>
                 <?php $i=1; ?>
                @foreach($category as $cat)
                    <tr class="text-center m-0 p-0">
                        <td>{{$i++}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->getParent['name']}}</td>
                        <td>{{$cat->visit}}</td>
                        <td>
                            <a href="{{ route('aCategory.edit',$cat->id) }}" class="btn btn-primary m-0 p-0">
                                <div class="iconSvg"  >
                                    {!! ($svg->edit())!!}
                                </div>


                            </a>
                            <form action="{{route('aCategory.destroy',$cat->id)}}" method="post" class="btn  m-0 p-0">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <button type="submit" >
                                    <div class="iconSvg btn-danger"  >
                                        {!! ($svg->delete())!!}
                                    </div>

                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        <div class="clear"></div>
@endsection
