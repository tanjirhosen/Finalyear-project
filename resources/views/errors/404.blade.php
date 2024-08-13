@extends('frontEnd.master')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Sorry .... Invalid URL <a href="{{route('home')}}" class="text-info">GO HOME</a></h1>
            </div>
        </div>
    </div>
</section>
@endsection
