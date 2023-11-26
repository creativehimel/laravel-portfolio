@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('components.home.hero')
@include('components.home.about')
@include('components.home.contact')

@endsection