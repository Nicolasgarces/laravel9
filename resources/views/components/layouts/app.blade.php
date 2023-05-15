<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{ $metaDescription ?? 'default meta description'}}">
    <title>{{$title ?? ''}}</title>
</head>
<body>
    {{--  @include('partials.navigation')  --}} {{--navrgacion de plantillas con herencia --}}
    <x-layouts.navigation/>
    {{$slot}} {{--navrgacion de plantillas con componentes --}}
  
</body>
</html>