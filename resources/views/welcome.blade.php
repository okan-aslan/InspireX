@extends('layout.app')

@section('content')
    @include('Components.tweet')

    @include('Components.comment-write')

    @include('Components.comment')
@endsection
