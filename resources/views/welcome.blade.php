
{{--  definicion de plantillas con
@extends('layouts.app')


@section('title', 'Home')
@section('meta-description', 'Home meta description')

@section('content')
    <h1>Welcome</h1>
@endsection  --}}


{{--  definicion de plantillas con componentes forma 1  --}}

{{--  @component('components.layout')

<h1>Welcome</h1>

@endcomponent  --}}


{{--  definicion de plantillas con componentes forma 2 --}}

<x-layouts.app
    title="Home Title" 
    metaDescription="Home meta descriptiooooon"
    posts="$posts">
    <h1>Welcome </h1>

</x-layouts.app>
