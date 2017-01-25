@extends('layouts.main')

@section('content')


<!--Show errors-->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--Show success-->
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



<section class="style-default-bright">
    <div class="section-header">
        <h2 class="text-primary">
            <span class="pull-left">Welcome!</span>
        </h2>
    </div>
    <div class="section-body">
        test
    </div>
</section>
@endsection
