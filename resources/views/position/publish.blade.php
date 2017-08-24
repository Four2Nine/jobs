@extends('layout.master')
@section('title', '发布职位')

@section('custom-style')

@endsection

@section('header-nav')
    @include('components.headerNav', ['isLogged' => true])
@endsection

@section('header-tab')
    @include('components.headerTab', ['activeIndex' => 2])
@endsection

@section('content')

@endsection

@section('custom-script')

@endsection
