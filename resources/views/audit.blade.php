@extends('layout.app')

@section('head-css')
    <link href="css/audit.css" rel="stylesheet">
    <link href="css/plus.css" rel="stylesheet">
    <link href="css/reviews.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.audit.audit')
    @include('partials.audit.plus')
    @include('partials.audit.reviews')x
@endsection

@section('head-js')
    <script src="js/audit.js"></script>
@endsection