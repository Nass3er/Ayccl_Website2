@extends('layouts.app')
@section('css')
@endsection
@section('content')

<x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    {{-- hrer content --}}


@endsection
@section('jsafter')
@endsection
