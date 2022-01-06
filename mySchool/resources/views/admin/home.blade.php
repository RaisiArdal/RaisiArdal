@extends('layouts.adminApp')

@section('content')
    <div class="container" style="min-height: 700px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('داشبورد مدیریت') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('شما کاربر Admin سایت هستید!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
