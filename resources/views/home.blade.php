@extends('layout.app')

@section('head-css')
    <link href="css/home.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.home.banner')
    @include('partials.home.couverture')
    @include('partials.home.technicien')
@endsection

@section('head-js')
    <script src="js/home.js"></script>
@endsection