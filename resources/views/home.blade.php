@extends('layouts.app')

@section('content')
<h1>home page</h1>
<div class="container">
    @foreach ($dresses as $dress)
        <div class="dress-card">
            <p>
                Dress Name: {{$dress->name}}
            </p>
            <p>
                Dress style: {{$dress->style}}
            </p>
            <p>
                Dress color: {{$dress->color}}
            </p>
        </div>

    @endforeach

</div>
@endsection
