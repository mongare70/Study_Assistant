
@extends('layouts.app')

@section('title', '500')

@section('content')
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card p-5 my-5 animated fadeIn">
        <div class="error-page">
            <h2>500</h2>
            <p>Internal Server Error. Our developers will fix this issue soon. Sorry for the inconvience.</p>
            <a href="/" class="btn btn-link">Go Home</a>
        </div>
    </div>
</div>

@stop

