@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $recipe->name }}</h1>

    <table>
        <tr>
            <td>Aantal personen:</td>
            <td>{{ $recipe->persons }}</td>
        </tr>
        <tr>
            <td>Toegevoegd:</td>
            <td>{{ $recipe->created_at }}</td>
        </tr>

    </table>
</div>
@endsection
