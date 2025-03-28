@extends('layouts.app')
@section('title', 'Home')

@section('content')

    @include('components.hero')

    @include('components.about')

    @include('components.services')

    @include('components.why-choose-us')

    @include('components.contact')

@endsection
