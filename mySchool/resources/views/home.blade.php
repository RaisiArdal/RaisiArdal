<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('sections.manSlider')
    </div>
    @include('sections.products')

    @include('sections.newsPosts')


@endsection
