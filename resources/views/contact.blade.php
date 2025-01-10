@extends('layout.app')

@section('head-css')
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/info.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.contact.info')
    @include('partials.contact.form')
@endsection

@section('head-js')
    <script src="js/contact.js"></script>
@endsection