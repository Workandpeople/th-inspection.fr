@extends('layouts.app')

@section('head-css')
    <link href="css/renov.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.renov.accompagnement')
@endsection

@section('head-js')
    <script src="js/renov.js"></script>
@endsection