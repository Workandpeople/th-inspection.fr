@extends('layout.app')

@section('head-css')
    <link href="css/audit.css" rel="stylesheet">
@endsection

@section('content')
    @include('partials.audit.audit')
@endsection

@section('head-js')
    <script src="js/audit.js"></script>
@endsection