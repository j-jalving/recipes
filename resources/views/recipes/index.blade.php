@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @foreach ($recipes as $recipe)
            <li><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name }}</a></p>
        @endforeach
    </ul>
</div>
@endsection
