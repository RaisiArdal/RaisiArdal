@extends('layouts.adminApp')

@section("content")
    <div class="container"><!-- start middle -->
        <!-- route('stuPisSbtStore') -->
        <form method="post" action="{{route('aNP.store')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-title h3 text-center">
                {{__('خبر و اطلاعیه جدید')}}
            </div>
            <div class="card card-body ">

                <div class="form-group row">
                    <label for="date" class="col-md-1 col-form-label text-md-right">{{ __('تاریخ') }}</label>
                    <div class="col-md-2">
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{old('jDate')}}" required  >

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <label for="show" class="col-md-1 col-form-label text-md-right">{{ __('نمایش') }}</label>
                    <div class="col-md-1">
                        <input id="show" type="radio" class="form-control " name="show" value="{{old('show')}}" required  >
                    </div>
                    <label for="end" class="col-md-1 col-form-label text-md-right">{{ __('پایان انتشار') }}</label>
                    <div class="col-md-2">
                        <input id="end" type="date" class="form-control @error('corrTitle') is-invalid @enderror" name="end" value="{{old('jDate')}}" required  >

                        @error('end')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <label for="publisher" class="col-md-1 col-form-label text-md-right">{{ __('منتشر کننده') }}</label>
                    <div class="col-md-3">
                        <input id="publisher2" type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="{{Auth::user()->name}}" required  >
                        <input id="publisher_id" type="text" class="form-control @error('publisher_id') is-invalid @enderror" name="publisher_id" value="{{Auth::user()->id}}" required  >

                        @error('publisher_id')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-2 col-form-label text-md-right">{{ __('دسته') }}</label>

                    <div class="col-md-10">

                        <select name="category_id" id="corrPriority" class="form-control @error('category_id') is-invalid @enderror" required  autofocus>
                            @if(isset($cats))
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}} </option>

                                @endforeach
                            @endif
                        </select>


                        @error('categoryId')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('تیتر') }}</label>

                    <div class="col-md-10">
                        <input id="title" type="text" class="form-control"  name="title" value="{{old('title')}}" required  autofocus>

                    </div>
                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-1 col-form-label text-md-right">{{ __('متن') }}</label>

                    <div class="col-md-11">
                            <textarea cols="200" rows="30" id="description" type="hidden" class="ckeditor form-control"  name="description" >
                            </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filename" class="col-md-2 col-form-label text-md-right">{{ __('فایل ضمیمه') }}</label>

                    <div class="col-md-10">
                        <input id="filename" type="file" class="form-control"  name="filename" value="{{old('filename')}}" required  autofocus>

                    </div>
                </div>



            </div>

            <!------------------------------------------------------------ ثبت ---------------------------------------------->

            <div class="card card-body mt-3">
                <div class="form-group row mb-0 ">
                    <button type="submit" class="btn btn-primary" id="btnStuSubmit">
                        {{ __('ثبت') }}
                    </button>
                </div>
            </div>
        </form>

    </div><!-- end middle -->
@endsection


