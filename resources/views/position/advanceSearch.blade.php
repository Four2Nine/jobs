@extends('layout.master')
@section('title', '职位搜索')

@section('custom-style')

@endsection

@section('header-nav')
    @include('components.headerNav', ['isLogged' => true])
@endsection

@section('header-tab')
    @include('components.headerTab', ['activeIndex' => 3])
@endsection

@section('content')

@endsection

@section('custom-script')

@endsection
