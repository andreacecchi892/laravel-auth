@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-lg-4">
                    ciao
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection