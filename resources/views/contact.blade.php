@extends('layout.app')

@section('head-css')
    <link href="css/contact.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.contact.info')
    @include('partials.contact.form')
@endsection

@section('head-js')
    <script src="js/contact.js"></script>
@endsection