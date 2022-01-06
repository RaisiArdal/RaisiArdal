<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('newsPosts.show')
    </div>

@endsection
