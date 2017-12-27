@extends('layouts.master')

@section('title', 'Doctors')
@section('doctors', 'active')

@section('content')
    <div class="container">
        <div class="row">

            @include('partials.doctor.available')

        </div>
    </div>
@endsection
