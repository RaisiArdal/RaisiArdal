@extends('layouts.adminApp')

@section('content')
    <div class="container">
        <h1 class="text-center my-4 title-box">افزودن دسته ها</h1>

        <form action="{{ route('aCategory.store') }}" method="post" class="text-right mr-5 mb-3">
            {{csrf_field()}}
            <div class="form-control border-primary">
                <div class="form-group mt-3">
                    <input type="text" class="form-control ml-2" id="name" name="name"
                           value="{{old('name')}}" placeholder="نام دسته را وارد کنید"/>
                </div>
                <div class="form-group mt-3">
                    <label>نام زیر دسته</label>
                    <select name="parent_id" class="form-control border">
                        <option value="0">---</option>
                        @foreach($category as $key=>$value)
                            <option value="{{$key}}" >{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary">ارسال</button>
            </div>
        </form>

    </div>

        <div class="clear"></div>
@endsection
